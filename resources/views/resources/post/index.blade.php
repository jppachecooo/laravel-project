<x-app-layout>
   
    <div class="pagetitle">
    <h1> {{ __('Post') }}</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> {{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Resource') }}</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card p-5">
                <div class="card-body">
                    <a href="{{ route('post.create')}}" class="btn btn-primary"><i class="bi bi-file-plus-fill me-1"></i> Add Post</a>
                <hr>
                
                    <h5 class="card-title">{{ __('Post') }}</h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Posts</th>
                                <th scope="col">Status</th>   
                                <th scope="col">Option</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            @isset($posts)
                                @foreach( $posts as $post )
                                    <tr>
                                        <td>{{$post->subject}}</td>
                                        <td>{{$post->post}}</td>
                                        <td>{{$post->status}}</td> 
                                        <td>
                                            <a href="{{ route ('post.show',$post)}}" class="btn btn-info m-1"><i class="bi bi-folder-plus"></i></a>
                                            <button type="button" class="btn btn-success m-1"><i class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-danger m-1"><i class="bi bi-trash"></i></button>
                                        </td>                              
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>                                                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

</x-app-layout>