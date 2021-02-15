<!-- Button trigger modal -->
<button type="button" class="btn btn-wi" style="width: 15%" data-toggle="modal" data-target="#exampleModalLong">
    Edit Profile
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('avastore' ) }}" role="form" method="get" enctype="multipart/form-data">
              @csrf
              @method("patch")
                <div class="form-group">
                    <img src="../storage/{{ Auth::user()->avatar }}" class="rounded-circle ava center">

                    <input type="file" name="avatar" id="avatar" class="mt-2 dropify">
                </div>

                <div class="form-group row">
                    <label for="username" class="col-md- col-form-label text-md-right"></label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control md:w-137 br-15" placeholder="{{ __('Username') }}" name="username" value="{{ Auth::user()->username }}" required autocomplete="off" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label text-md-right"></label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control md:w-137 br-15" placeholder="{{ __('Email Address') }}" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bio" class="col-md-2 col-form-label text-md-right"></label>

                    <div class="col-md-6">
                        <textarea id="bio" type="bio" class="form-control md:w-137 br-15" placeholder="{{ __('My Bio') }}" name="bio" rows="5" required autocomplete="bio">{{ Auth::user()->bio }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-wi" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-wi">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>