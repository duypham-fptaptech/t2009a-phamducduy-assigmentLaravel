<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Danh sách product hiện có</h2>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
            <tr>
                <th>Identity Number</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr class="gradeU">
                    <td>{{$item->identityNumber}}</td>
                    <td>{{$item->firstname}}</td>
                    <td>{{$item->lastame}}</td>
                    <td>{{$item->phone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row datatables-footer">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_info" id="datatable-default_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate">
                    {{--                        {!! $list->links() !!}--}}
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
