<html>
<head>
  @yield('css')
  <style>
    body{
      font-family: sans-serif;
    }
    
    header { 

    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
    a {
      text-decoration: none;
      color: black;
    }

    table td {
      padding: 5px;
    }
    th {
      text-align: center;
    }
    .logo {
      width: 150px;
      height: 62px;
    }

    .text-right {
      text-align: right;
    }
  </style>
<body>
  <div class="content">
    <table width="100%" border="1" cellpadding="0" cellspacing="0">

      <tbody>
      <tr>
        <td style="background: yellow;">area</td>
        <td style="background: yellow; text-align: center;">area</td>
      </tr>
      <tr>
        <td style="background: gray; height: 100px;" colspan="2"> ss {!! $pdfprueba->render() !!}</td>
      </tr>
   
      </tbody>
    </table>
  </div>
</body>
@yield('scripts')
<script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/line-chart.js') }}"></script>
</html>


