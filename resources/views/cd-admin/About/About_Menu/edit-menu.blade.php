@extends('cd-admin.admin')
@section('content')
<section class="content">
  <div class="row">
    <section class="content-header">
      <h1>
        About Submenu
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="{{url('/about')}}">About</a></li>
        <li class="active"><a href="{{url('/menu')}}">About Submenu</a></li>
        <li class="active"><a href="{{url()->current()}}">Edit Submenu</a></li>
      </ol>
    </section><br>
        <div class="col-md-12">
         <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit Submenu</h3>
          </div>
          <form action="{{url('/updatemenu',$data->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control ui-datepicker" id="exampleInputEmail1" name="title" placeholder="Enter Title" value="{{$data->title}}" >
                  <div class="text text-danger">{{ $errors->first('title') }}</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea id="summernote" placeholder="Enter Description" name="description" >{{$data->description}}</textarea>
                  <div class="text text-danger">{{ $errors->first('description') }}</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">SEO Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="seotitle" placeholder="Enter Summary" value="{{$data->seotitle}}" >
                  <div class="text text-danger">{{ $errors->first('seotitle') }}</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">SEO Keyword</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="seokeyword" placeholder="Enter Summary" value="{{$data->seokeyword}}" >
                  <div class="text text-danger">{{ $errors->first('seokeyword') }}</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">SEO Description</label>
                  <textarea class="summernote" placeholder="Enter Description" name="seodescription" >{{$data->seodescription}}</textarea>
                  <div class="text text-danger">{{ $errors->first('seodescription') }}</div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label><br>
                  <input type="radio" name="status" <?php echo $data->status=='Active'?'checked':''?> value="Active"> Active &nbsp; &nbsp; &nbsp; &nbsp;
                  <input type="radio" name="status" <?php echo $data->status=='Inactive'?'checked':''?> value="Inactive"> Inactive
                </div>

                <div>
                  <button type="submit" class="btn btn-info" name="insert">Update Submenu</button>
                </div>
              </form>
              <a href="{{URL()->previous()}}"><button type="button" class="btn btn-default pull-right" data-dismiss="modal">Back</button></a>
            </div>

          </div>
    </div>
  </section> 


  @endsection