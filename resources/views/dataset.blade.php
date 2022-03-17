<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Test</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  </head>
  <body>


    <div class="container mt-3">

      <div class="jumbotron bg-dark text-white p3">
        <h2>Laravel DataTable With Ajax</h2>
      </div>
      <table id="mytable23" class="table table-striped  table-bordered jumbotron bg-light">

      </table>
    </div>

    <script>
      $(document).ready(function(){

        $('#mytable23').DataTable({
          "processing":true,
          "initComplete":function(settings,json){
            $('#mytable23').show();
          },
          "serverSide":true,
          "select":true,
          "dataSrc":"tableData",
          "bDestroy":true,
          "columns": [{
              "data":"record_id",
              "name":"record_id",
              "title":"record_id"

          },
          {
            "data":"firstname",
            "name":"firstname",
            "title":"firstname"
          },
          {
            "data":"lastname",
            "name":"lastname",
            "title":"lastname"
          },
          {
            "data":"email",
            "name":"email",
            "title":"email"
          },
          {
            "data":"active_status",
            "name":"active_status",
            "title":"active_status",
            mRender:function(data){
              if(data =='1'){
                return '<span class="badge badge-success">Active</span>'
              }
              if(data == '0'){
                return '<span class="badge badge-danger">Deactive</span>'
              }
            }
          }
        ],
          "language":{
            "emptyTable":"No files to Show..."
          },
          "ajax":"{{ url('getDataTable')}}",
        });

      });

    </script>


  </body>
</html>
