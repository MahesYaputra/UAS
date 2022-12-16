<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overloop Sort Prices PDF</title>
</head>

<body>
    <center><img
            src="{{ url('https://www.weareanimalkingdom.com/wp-content/uploads/2021/06/Universitas-Pelita-Harapan-UPH.jpg%27') }}"
            alt="logo UPH"></center>
    <p style="text-align:center"><strong>Nama: Mahes Yaputra</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>NIM: 03081200047</strong><br />
        &nbsp;</p>

        <table class="table" id="DataTables">
          <thead>
            <tr>
                <th>#</th>
                <th>Price</th>
                <th>Location</th>
                <th>Currency</th>
            </tr>
          </thead>
          <tbody>
            @foreach($sort_price as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->currency }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

    <p style="text-align:center"><strong>Copyright Mahes Yaputra (03081200047)</strong></p>


</body>

</html>