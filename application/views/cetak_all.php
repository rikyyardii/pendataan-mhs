<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project/RikyArdi/UniversitasMuhammadiyahLamongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
       <table class="table table-striped table-bordered">
         <div class="container mt-2 mb-2">
          <h3><center>DATA MAHASISWA</center></h3>
          <h3><center>UNIVERSITAS MUHAMMADIYAH LAMONGAN</center></h3>
         </div>
          <thead>
            <tr>
              <th scope="col-4"><center>No</center></th>
              <th scope="col-4"><center>Nama Mahasiswa</center></h9></th>
              <th scope="col-4"><center>NIM</center></th>
              <th scope="col-4"><center>Jenis Kelamin</center></th>
              <th scope="col-4"><center>Email</center></th>
              <th scope="col-4"><center>Fakultas</center></th>
              <th scope="col-4"><center>Program Studi</center></th>
            </tr>
          </thead>
          <?php
            $count = 0;
            foreach ($mahasiswa as $row) :
              $count++;
          ?>
            <tr>
              <th scope="row"><?php echo $count;?></th>
              <td><?php echo $row->mhs_name;?></td>
              <td><?php echo ($row->mhs_nim);?></td>
              <td><?php echo $row->mhs_jenkel;?></td>
              <td><?php echo $row->mhs_email;?></td>
              <td><?php echo $row->fakultas_name;?></td>
              <td><?php echo $row->prodi_name;?></td>
            </tr>
            <?php endforeach;?>
          </tbody>

      <script type="text/javascript">
          window.print();
      </script>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </table>
    </body>
  </html>