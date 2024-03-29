<?php

namespace App\Notifications\Page;

use App\Models\Page;
use App\Notifications\BaseNotification;
use Illuminate\Notifications\Messages\SlackMessage;

class UpdatePageNotification extends BaseNotification
{
    protected $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function toSlack()
    {
        return (new SlackMessage)
            ->from($this->from)
            ->attachment(function ($attachment) {
                $attachment
                    ->content(':floppy_disk: <' . route('users.show', [$this->page->wiki->team->slug, $this->page->user->slug,]) . '|' . $this->page->user->first_name . ' ' . $this->page->user->last_name . '> updated a page <'. route('pages.show', [$this->page->wiki->team->slug, $this->page->wiki->space->slug, $this->page->wiki->slug, $this->page->slug]) . '|'. $this->page->wiki->name . '/' . $this->page->name . '>.');
            });
    }
}
