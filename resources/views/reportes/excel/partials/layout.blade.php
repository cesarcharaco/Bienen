<html>
<head>
  @yield('css')
<body>

  <header>
    <p align="center">
      <b style="font-size: 20px; margin-top: 20px;">
        República Bolivariana de Venezuela<br>
       </b>
      Asociación Civil Real Victoria<br>
      Rif: J-40153589-5
      <p align="right">Fecha: <?php echo date('d/m/Y h:m A'); ?></p>
    </p>
  </header>
  
  <div class="content">
    @yield('content')
  </div>

  <footer>
    <table>
      <tr>
        <td>
          <p class="izq">
            <a href="https://www.realvictoria.com.ve" target="_blank">realvictoria.com.ve</a>
          </p>
          Dirección: Urb. Las Mercedes, calle 9 local Polideportivo. La Victoria, Estado Aragua Venezuela.
          soporte@realvictoria.com.ve telef. 0244-6345570. <br>
            <h5 style="text-align: right;">Impreso por: {{ \Auth::User()->email }}</h5>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>


</body>
</html>