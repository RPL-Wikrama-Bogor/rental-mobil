<!DOCTYPE html>
<html>
<head>
<title>Form Sewa Mobil</title>
</head>
<body>


<center>
  <h2>Silahkan Isi Data Di Bawah</h2>
    <form action="simpan.php" method="post">
  <table>
          <tr>
              <td><label>Nama:</label></td><td><input type="text" name="nama" placeholder="Masukan Nama" /></td>
    </tr>
    <tr>
        <td><label>No Hp:</label></td><td><input type="text" name="hp" placeholder="Masukan No Hp" /></td>
    </tr>
    <tr>
        <td><label>Merek:</label></td><td><input type="text" name="merek" placeholder="Masukan Merek" /></td>
    </tr>
    <tr>
        <td><label>Sewa Berapa Hari:</label></td><td><input type="number" name="sewa" placeholder="Masukan Hari Sewa" /></td>
    </tr>
    <tr>
        <td><label>Harga:</label></td><td><input type="text" name="harga" placeholder="Masukan Harga" /></td>
    </tr>
    <tr>
      <td>Tanggal Pesan </td> 
      <td>
        <input type="date" size="30" name="tgl" />
      </td>
     </tr>
    <tr>
        <td><label>Alamat:</label></td><td><textarea name="alamat" rows="5" placeholder="Masukan Alamat" ></textarea></td>
    </tr>
    <tr>
        <td><label>Pembayaran Melalui:</label></td><td><input type="text" name="bayar" placeholder="Masukan Pembayaran" /></td>
    </tr>
    <tr>
        <td><label>No Rekening:</label></td><td><input type="text" name="norek" placeholder="Masukan No Rekening" /></td>
    </tr>
  </table>
      <button type="submit" name="submit">submit</button>
    </form>
  </center>
</body>
</html>
