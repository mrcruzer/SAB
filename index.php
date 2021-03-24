<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

    <title>REPORT SAB</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Reporteria Tansaccional Sab</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="start_date" placeholder="Start Date" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="end_date" placeholder="End Date" readonly>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="filter" class="btn btn-outline-info btn-sm">Filter</button>
                    <button id="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                    <button type="submit" id="Save" class="btn btn-outline-info btn-sm" data-toggle="modal" 
                    data-target="#exampleModal">Save</button>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless display nowrap" id="records" style="100%">
                                <thead>
                                    <tr>
                                <th>ID</th>
                                <th>CUC</th>
                                <th>SAB</th>                               
                                <th>TERMINAL</th>
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>MONTO</th>
                                <th>COD_TEX</th>
                                <th>COD_RESP</th>
                                <th>COD_CC</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <?php

       include 'model.php';
       $model = new Model();
       $insert = $model->insert();



?>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingreso Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action=""
                        autocomplete="off">
                    <div class="form-group">
                        <div class="row">

                        <div class="col-12 col-sm-6">
                        <label>CUC</label>
                        <input type="number" class="form-control" name="CUC" id="CUC" autofocus required>
                                          
                        </div>
                        <div class="col-12 col-sm-6">
                        <label>SAB</label>
                        <input class="form-control" id="SAB" name="SAB" type="text"
                         required/>
                     
                      
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>TERMINAL</label>
                        <input class="form-control" id="TERMINAL" name="TERMINAL" type="text"
                         required/>

                        
                        
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>FECHA</label>
                        <input class="form-control" id="FECHA" name="FECHA" type="date"
                        autofocus required/>
                     
                        
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>HORA</label>
                        <input class="form-control" id="HORA" name="HORA" type="time"
                        autofocus required/>
                     
                        
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>MONTO</label>
                        <input class="form-control" id="MONTO" name="MONTO" type="float"
                        autofocus required/>
                     
                        
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>COD_TEX</label>
                        <input class="form-control" id="COD_TEX" name="COD_TEX" type="number"
                        autofocus required/>
                     
                        
                        </div>

                        
                        <div class="col-12 col-sm-6">
                        <label>COD_RESP</label>
                        <input class="form-control" id="COD_RESP" name="COD_RESP" type="number" value="1" readonly
                        autofocus required/>
                     
                        
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>COD_CC</label>
                        <input class="form-control" id="COD_CC" name="COD_CC" type="number"
                        autofocus required/>
                     
                   
                        </div>
                
                       
                        

                     </div>
                   </div>


                       <div class="modal-footer">
                                            
                        <button type="submit" name="submit" class="btn btn-success">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>                         
                                        


                        
                        
        </form>
        ...
      </div>
      
      </div>
    </div>
  </div>
</div>

 <!-- fin del modal -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script>
    <!-- Momentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script>
    $(function() {
        $("#start_date").datepicker({
            "dateFormat": "yy-mm-dd"
        });
        $("#end_date").datepicker({
            "dateFormat": "yy-mm-dd"
        });
    });
    </script>

    <script>
    // Fetch records

    function fetch(start_date, end_date) {
        $.ajax({
            url: "records.php",
            type: "POST",
            data: {
                start_date: start_date,
                end_date: end_date
            },
            dataType: "json",
            success: function(data) {
                // Datatables
                var i = "1";

                $('#records').DataTable({
                    "data": data,
                    // buttons
                    "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    "buttons": [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    // responsive
                    "responsive": true,
                    "columns": [{
                            "data": "id",
                            "render": function(data, type, row, meta) {
                                return i++;
                            }
                        },
                        {
                            "data": "CUC"
                        },
                        {
                            "data": "SAB",
                            "render": function(data, type, row, meta) {
                                return `${row.SAB}`;
                            }
                        },
                        {
                            "data": "TERMINAL",
                            "render": function(data, type, row, meta) {
                                return `${row.TERMINAL}`;
                            }
                        },
                        {
                            "data": "FECHA"
                        },

                        {
                            "data": "HORA"
                        },

                         {
                            "data": "MONTO"
                            
                            
                        },

                        {
                            "data": "COD_TEX"
                            
                            
                        },                                        

                        {
                            "data": "COD_RESP"
                           
                            
                        },
                            {"data":"COD_CC"},

                    


                    ]
                });
            }
        });
    }
    fetch();

    // Filter

    $(document).on("click", "#filter", function(e) {
        e.preventDefault();

        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();

        if (start_date == "" || end_date == "") {
            alert("both date required");
        } else {
            $('#records').DataTable().destroy();
            fetch(start_date, end_date);
        }
    });

    // Reset

    $(document).on("click", "#reset", function(e) {
        e.preventDefault();

        $("#start_date").val(''); // empty value
        $("#end_date").val('');

        $('#records').DataTable().destroy();
        fetch();
    });
    </script>
</body>

</html>