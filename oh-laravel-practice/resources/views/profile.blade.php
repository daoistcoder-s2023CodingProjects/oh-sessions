<!-- profile.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container"  style="max-width: 100%;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <div class="card-img-container">
              <img src="/svg/brunoPFP.webp" class="img-thumbnail w-100 img-fluid" alt="bruno-profilepic" data-bs-toggle="modal" data-bs-target="#profilePicModal">
            </div>
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title"><strong>{{ Auth::user()->name }}</strong></h5>
              </div>
              <p class="card-text" style="overflow-wrap: break-word;">
               {{ auth()->user()->profile->description }}
              </p>
							<p class="card-text"><small class="text-muted">Bruno Test</small></p>
							<div class="card-body d-flex justify-content-end align-items-end">

								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateProfileModal">
									Update Profile
								</button>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="profilePicModal" tabindex="-1" aria-labelledby="profilePicModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profilePicModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form to change profile picture goes here -->
        <p>This is where you can upload a new profile picture.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="updateProfileModal" tabindex="-1" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateProfileModalLabel">Update Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
				<form action="{{ route('profile.update', ['id' => Auth::id()]) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="usernameInput" class="form-label">Username</label>
            <input type="text" class="form-control" id="usernameInput" name="name" placeholder="Enter Username" value="{{ Auth::user()->name }}">
          </div>
          <div class="mb-3">
            <label for="bioInput" class="form-label">Profile Bio</label>
            <textarea class="form-control" id="bioInput" name="description" rows="4" placeholder="Enter Profile Bio">{{ auth()->user()->profile->description }}</textarea>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
