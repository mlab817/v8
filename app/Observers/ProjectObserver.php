<?php

namespace App\Observers;

use Illuminate\Support\Facades\Log;
use App\Models\ProcessingStatus;
use App\Models\Project;
use App\Notifications\ProjectCreated;
use App\Notifications\ProjectDeleted;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectObserver
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function saving(Project $project)
    {
        $project->slug = Str::slug($project->title);
    }

    public function creating(Project $project)
    {
        $project->created_by = auth()->user()->id;
        $project->finalized = false;
    }

    public function created(Project $project)
    {
      // set processing status id to 'draft'
      $project->processing_status_id = 1;

      // create uuid
      $uuid = Str::uuid();
      $project->uuid = $uuid;
    }

    public function updating(Project $project)
    {
      // if project is finalized set processing status id to finalized
      if ($this->request['finalized']) {
        $processing_status = ProcessingStatus::where('name','finalized')->first();
        $project->processing_status_id = $processing_status->id;
      }

      $project->updated_by = auth()->user()->id;
    }

    public function updated(Project $project) {
        //
    }

    public function deleting(Project $project)
    {
        $project->deleted_by = auth()->user()->id;
    }

    public function forceDeleting(Project $project)
    {
      // In case you want to write some information on who permanently deleted a model.
        Log::debug(auth()->user()->email . ' permanently deleted project #' . $project->id);
    }
}
