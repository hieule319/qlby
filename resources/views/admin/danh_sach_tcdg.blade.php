@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách tiêu chí đánh giá
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
     <?php
        $message= Session::get('message');
        if($message)
        {
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',NULL);
        }
    ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Độ tuổi</th>
            <th> Tháng</th>
            <th> Tuần</th>
            <th> Điểm</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($danh_sach_tcdg as $key => $ds_tcdg)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $ds_tcdg->tieude }}</td>
            <td><span class="text-ellipsis"></span>{{ $ds_tcdg->noidung }}</td>
            <td><span class="text-ellipsis"></span>{{ $ds_tcdg->tuoi }}</td>
            <td><span class="text-ellipsis"></span>{{ $ds_tcdg->thang }}</td>
            <td><span class="text-ellipsis"></span>{{ $ds_tcdg->tuan }}</td>
            <td><span class="text-ellipsis"></span>{{ $ds_tcdg->diem }}</td>
            <td>
              <a onclick="return confirm('Bạn có chắc chắn muốn sửa?')" href="{{URL::to('/sua-tcdg/'.$ds_tcdg->id_tcdg)}}" class="active styling edit" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>

                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/xoa-tcdg/'.$ds_tcdg->id_tcdg)}}" class="active styling delete" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection