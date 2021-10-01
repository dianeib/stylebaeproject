@extends('backend.admin.admin_master')
@section('admin')



<div class="container-full">

	<section class="content">
		<div class="row">
			<div class="col-8">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Categories List</h3>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<!-- <th>Icon</th> -->
										<th>Category English</th>
										<th>Category Hindi</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach($category as $item)
									<tr>
                                        <!-- <td>
											<span><i class="{{ $item->category_icon}}"></i></span>
										</td> -->
										<td>{{$item->category_name_en}}</td>
										<td>{{$item->category_name_hin}}</td>
										
										<td>
											<a href="{{ route('category.edit',$item->id)}}" class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
											<a href="{{ route('category.delete',$item->id)}}" class="btn btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
										</td>
										
									</tr>
									@endforeach
								</tbody>
							
						</table>
						</div>

					</div>
				</div>
			</div> 
			


			
			<div class="col-4">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"> Add Categories </h3>
					</div>
					<div class="box-body">
						<form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
							
							@csrf
							<div class="form-group">
									<h5>Category Name English <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="category_name_en" class="form-control"  >
										 @error('category_name_en')
										 	<span class="text-danger">{{$message}}</span>
										 @enderror
									</div>
							</div>	
							<div class="form-group">
									<h5>Category Name Hindi <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="category_name_hin" class="form-control"  >
										@error('category_name_hin')
										 	<span class="text-danger">{{$message}}</span>
										 @enderror
									</div>
							</div>	
							<!-- <div class="form-group">
									<h5>Category Icon <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="category_icon" class="form-control"  >
										@error('category_icon')
										 	<span class="text-danger">{{$message}}</span>
										 @enderror	 
									</div>
							</div> -->
							
							<input type="submit" class="btn btn-rounded btn-info" value="Add category">
						</form>
					</div>
				</div>
			

		</div>
		
	</section>
			
</div>



@endsection