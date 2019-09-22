@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <th>Post title</th>
                                <th>Post content</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->post_title}}</td>
                                    <td>{{$post->post_content}}</td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
