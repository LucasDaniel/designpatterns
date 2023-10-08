<?php

namespace Lucas\Mediator;

class EventDispatcher
{
    /**
     * @var array
     */
    private $observers = [];

    public function __construct()
    {
        // The special event group for observers that want to listen to all
        // events.
        $this->observers["*"] = [];
    }

    private function initEventGroup(string &$event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = "*"): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers["*"];

        return array_merge($group, $all);
    }

    public function attach(Observer $observer, string $event = "*"): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    public function detach(Observer $observer, string $event = "*"): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function trigger(string $event, object $emitter, $data = null): void
    {
        echo "EventDispatcher: Broadcasting the '$event' event.\n";
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($event, $emitter, $data);
        }
    }
}
