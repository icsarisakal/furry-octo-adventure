@extends('index')

@section('title','Country')

@section('greeting')
    <section>
        <!--for demo wrap-->
        <h1> Live COVID-19 Stats</h1>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>Country</th>
                    <th>Active Cases</th>
                    <th>Criticial Cases</th>
                    <th>Recovereds</th>
                    <th>Deaths</th>
                    <th>Total Tests</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody id="myTable">
                @foreach($response as $data => $deger)
                    <tr>
                        <td style="font-weight: bold">{{$response[$data]['country']}}</td>
                        <td>{{$response[$data]['activeCases']}} </td>
                        <td>{{$response[$data]['seriousCritical']}}</td>
                        <td>{{$response[$data]['totalRecovered']}}</td>
                        <td>{{$response[$data]['totalDeaths']}}</td>
                        <td>{{$response[$data]['totalTests']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
@section('greeting2')
    <section>
    <div class="container">
        <h2>Filterable Table</h2>
        <p>Type something in the input field to search the table for first names, last names or emails:</p>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <table class="table table-bordered table-striped" cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Country</th>
                <th>Active Cases</th>
                <th>Criticial Cases</th>
                <th>Recovereds</th>
                <th>Deaths</th>
                <th>Total Tests</th>
            </tr>
            </thead>
            <div>
            <tbody id="myTable">
            @foreach($response as $data => $deger)
                <tr>
                    <td style="font-weight: bold">{{$response[$data]['country']}}</td>
                    <td>{{$response[$data]['activeCases']}} </td>
                    <td>{{$response[$data]['seriousCritical']}}</td>
                    <td>{{$response[$data]['totalRecovered']}}</td>
                    <td>{{$response[$data]['totalDeaths']}}</td>
                    <td>{{$response[$data]['totalTests']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
