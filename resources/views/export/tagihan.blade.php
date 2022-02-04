<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tagihan Pasien</title>
    <style type="text/css">

        @page {
            margin: 0cm 0cm;
        }
        body {
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
            color: #000;
        }


        table tr th{
            background-color: rgb(75, 165, 250);
            font-size: 15px;
        }

        table{
            background-color: whitesmoke;
        }

        table tr td{
            font-size: 15px;
        }

        p {
            font-size: 15px;
        }


    </style>
</head>

<body>
    <div>
        <img text="left" src="{{ url('public/storage/logo/logo.png') }}" width="100px" >
    </div>
    <div>
        <h3 style="text-align:center;">Tagihan Pasien</h3>
    </div>
    <div style="col-sm-6">
        @foreach ($idens as $iden)
            <h5>Kepada:</h5>
        <div class="pasien">
            <strong>Nama : {{$iden->nama}}</strong>
        </div>
            <div>Alamat : {{$iden->identitas}}</div>
            <div>No. Hp : {{$iden->hp}}</div>
            <div>Alamat : {{$iden->alamat}}</div>
        @endforeach
    </div>
    <div style="table-responsive-sm sty" >
        <table style="table table-striped" border="1" cellspacing="0" cellpadding="8" width="100%" >
        <thead>

        <tr style="table-primary" >
        <th style="text-align:center;">No</th>
        <th>Item</th>
        <th style="text-align:center;">Harga Satuan</th>
          <th style="text-align:center;">Kuantitas</th>
        <th style="text-align:center;">Sub Total</th>
        </tr>
        </thead>
        <tbody>

            @for ($n=0;$n<sizeof($items);$n++)
            <tr>
            <td style="text-align:center">{{$n + 1}}</td>
            <td style="left strong">{{$item=array_keys($items)[$n]}}</td>
                @for ($i=0;$i<3;$i++)
                    @if ($i != 1)
                        <td style="text-align:center">{{formatrupiah($items[$item][$i])}}</td>
                    @else
                        <td style="text-align:center">{{$items[$item][$i]}}</td>
                    @endif
                @endfor
            </tr>
            @endfor
            <tr>
                <th style="text-align:center"></th>
                <th>Jumlah Harga</th>
                <th style="text-align:right"></th>
                  <th style="text-align:center"></th>
                <th style="text-align:right">{{formatrupiah(jumlah_harga($items))}}
                </th>
                </tr>
        </tbody>
        </table>
    </div>

    <div style="col-sm-6">
            <h5 style="text-align:right">Kasir</h5>
            <h5></h5>
            <h5></h5>
            <h5 style="text-align:right">Nuri Klinik</h5>
    </div>

</body>

</html>
