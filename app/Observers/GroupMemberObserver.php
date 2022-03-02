<?php

namespace App\Observers;

use App\Models\GroupMember;

class GroupMemberObserver
{
    /**
     * Handle the GroupMember "created" event.
     *
     * @param  \App\Models\GroupMember  $groupMember
     * @return void
     */
    public function created(GroupMember $groupMember)
    {
        //
    }

    /**
     * Handle the GroupMember "updated" event.
     *
     * @param  \App\Models\GroupMember  $groupMember
     * @return void
     */
    public function updated(GroupMember $groupMember)
    {
        //
    }

    /**
     * Handle the GroupMember "deleted" event.
     *
     * @param  \App\Models\GroupMember  $groupMember
     * @return void
     */
    public function deleted(GroupMember $groupMember)
    {
        //
    }

    /**
     * Handle the GroupMember "restored" event.
     *
     * @param  \App\Models\GroupMember  $groupMember
     * @return void
     */
    public function restored(GroupMember $groupMember)
    {
        //
    }

    /**
     * Handle the GroupMember "force deleted" event.
     *
     * @param  \App\Models\GroupMember  $groupMember
     * @return void
     */
    public function forceDeleted(GroupMember $groupMember)
    {
        //
    }
}
