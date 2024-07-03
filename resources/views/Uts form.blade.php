<html>
<form action="/submit-produk" method="post">
  <table>
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Tempat</th>
        <th>Tahun</th>
      </tr>
    </thead>
    <tbody>
      <tr>
<td>
          <input type="Number" name="Nomor" required>
        </td>
        <td>
          <input type="Teks" name="Nama Produk" required>
        </td>
        <td>
          <input type="Number" name="Harga" required>
        </td>
        <td>
          <input type="Number" name="Jumlah" required>
        </td>
        <td>
          <input type="Teks" name="Tempat" required>
        </td>
        <td>
          <input type="Number" name="Tahun" required>
        </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>