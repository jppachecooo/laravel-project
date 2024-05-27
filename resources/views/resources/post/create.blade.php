<x-app-layout>
   
    <div class="pagetitle">
    <h1> {{ __('Post') }}</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> {{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Resource') }}</li>
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}"> {{ __('Add A New Post') }}</a></li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card p-5">
                <div class="card-body">
                    <h4>Add New Post</h4>
                    <form action="{{route('post.store')}}" method="post">
                        @csrf
                        <div class="col-sm-10">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                                <label for="floatingInput">Subject</label>
                            </div>
        
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Post" name="post" style="height: 100px"></textarea>
                                <label for="floatingTextarea">Post</label>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

</x-app-layout>