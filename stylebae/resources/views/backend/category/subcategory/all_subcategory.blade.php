@extends('backend.admin.admin_master')
@section('admin')



<div class="container-full">

	<section class="content">
		<div class="row">
			<div class="col-8">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Sub Categories List</h3>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Image</th>
										<th>Category</th>
										<th>Sub  Eng</th>
										<th>Sub  Hin</th>
									
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach($subcategory as $item)
									<tr>
										<td> <img src="{{asset($item->image)}}" alt="" style="width: 50px; height:50px;"> </td>
                                        <td>{{$item->category->category_name_en}}</td>
										
										<td>{{$item->subcategory_name_en}}</td>
										<td>{{$item->subcategory_name_hin}}</td>
										
										<td>
											<a href="{{ route('subcategory.edit',$item->id)}}" class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
											<a href="{{ route('subcategory.delete',$item->id)}}" class="btn btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
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
						<h3 class="box-title"> Add Sub Categories </h3>
					</div>
					<div class="box-body">
						<form action="{{ route('subcategory.store')}}" method="post" enctype="multipart/form-data" >
							
							@csrf
							<div class="form-group">
									<h5> Category Name <span class="text-danger">*</span></h5>
									<div class="controls">
										
										<select name="category_id" id="" class="form-control">
											<option value="" selected disabled> Select Category</option>
										@foreach($category as $cat)
											<option value="{{$cat->id}}">{{$cat->category_name_en}}</option>
											@endforeach	
										</select>
										
										 @error('category_id')
										 	<span class="text-danger">{{$message}}</span>
										 @enderror
									</div>
							</div>	
							<div class="form-group">
									<h5> Sub Category Name English <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="subcategory_name_en" class="form-control"  >
										@error('subcategory_name_en')
										 	<span class="text-danger">{{$message}}</span>
										 @enderror
									</div>
							</div>	
							<div class="form-group">
									<h5>Sub Category Name Hindi <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="subcategory_name_hin" class="form-control"  >
										@error('subcategory_name_hin')
										 	<span class="text-danger">{{$message}}</span>
										 @enderror	 
									</div>
							</div>
							<div class="form-group">
									<h5>Image <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="file" name="image" class="form-control"  >
										@error('image')
										 	<span class="text-danger">{{$message}}</span>
										 @enderror	 
									</div>
							</div>
							
							<input type="submit" class="btn btn-rounded btn-info" value="Add Sub category">
						</form>
					</div>
				</div>
			

		</div>
		
	</section>
			
</div>



@endsection