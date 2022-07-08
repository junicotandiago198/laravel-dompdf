<!DOCTYPE html>
<html>
<head>
<title>Invoice Template Design</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/invoice/style.css') }}">
</head>
<body>

<div class="wrapper">
<div class="invoice_wrapper">
  <div class="header">
    <div class="logo_invoice_wrap">
      <div class="logo_sec">
        <img src="{{ asset('/images/codingboss.png') }}" alt="code logo">
        <img src="{{ asset('/images/codingboss.png') }}" alt="code logo">
        <div class="title_wrap">
          <p class="title bold">Disdikbud Kabupaten Muara Enim</p>
          <p class="sub_title">SEKOLAH DASAR JUMLAH SISWA</p>
        </div>
      </div>
      <div class="invoice_sec">
        <p class="invoice bold">JUMLAH SISWA</p>
        {{-- <p class="invoice_no">
          <span class="bold">Invoice</span>
          <span>#3488</span>
        </p> --}}
        <p class="date">
          <span class="bold">Tanggal</span>
          <span>08/Jan/2022</span>
        </p>
      </div>
    </div>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Country</th>
        </tr>
        @foreach ($data as $dt)
            <tr>
                <td>{{ $dt->name }}</td>
                <td>{{ $dt->contact }}</td>
                <td>{{ $dt->country }}</td>
            </tr>
        @endforeach
    </table>
    
  <div class="footer">
    <p>Thank you and Best Wishes</p>
    <div class="terms">
          <p class="tc bold">Terms & Coditions</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non praesentium doloribus. Quaerat vero iure itaque odio numquam, debitis illo quasi consequuntur velit, explicabo esse nesciunt error aliquid quis eius!</p>
      </div>
  </div>
</div>
</div>


</body>
</html>