<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Seekars Website</title>
        <link rel="stylesheet" href="apply.css">
        <script src="https://kit.fontawesome.com/a67b783cc0.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
    </head>
    <body>


    <main class="table">
            <section class="table__header">
                <h1>Employee List</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="search.png" alt="">
                </div>
              <!--  <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox" id="export-file">
                    <div class="export__file-options">
                        <label>Export As &nbsp; &#10140;</label>
                        <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                        <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                        <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                        <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                    </div>
                </div>-->
            </section>
            <section class="table__body">
                <!--
                <table>
                    <thead>
                        <tr>
                            <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
-->
                    <?php

$con = new mysqli('localhost','root','','test');
	

$table='<table class="table">
    <thead>
      <tr>
      <th> Name <span class="icon-arrow">&UpArrow;</span></th>
      <th> Job <span class="icon-arrow">&UpArrow;</span></th>
      <th> Diplomas <span class="icon-arrow">&UpArrow;</span></th>
      <th> Competance <span class="icon-arrow">&UpArrow;</span></th>
      <th> Experience <span class="icon-arrow">&UpArrow;</span></th>
      <th> Salary <span class="icon-arrow">&UpArrow;</span></th>
      <th> Operation <span class="icon-arrow">&UpArrow;</span></th>
      </tr>
    </thead>';
    $con = new mysqli('localhost','root','','test');
	

    $table='<table class="table">
        <thead>
          <tr>
          <th> Name <span class="icon-arrow">&UpArrow;</span></th>
          <th> Competance <span class="icon-arrow">&UpArrow;</span></th>
          <th> Diplomas <span class="icon-arrow">&UpArrow;</span></th>
          <th> Experience <span class="icon-arrow">&UpArrow;</span></th>
          <th> Score <span class="icon-arrow">&UpArrow;</span></th>
          <th> mail <span class="icon-arrow">&UpArrow;</span></th>
          <th> Decision <span class="icon-arrow">&UpArrow;</span></th>
          <th> Confirme <span class="icon-arrow">&UpArrow;</span></th>
          </tr>
        </thead>';
    
        $access=$_SESSION['pseudo'];
        $sql="select * from offer,cv where offer.competance=cv.competancecv or offer.diplomas=cv.diplomascv or offer.experience= cv.experiencecv and offer.pseudo='$access' ";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $score=0;
            $name=$row['name'];
            $competance=$row['competance'];
            $competancecv=$row['competancecv'];
            $diplomas=$row['diplomas']; 
            $diplomascv=$row['diplomascv'];
            $salary=$row['salary']; 
            $experience=$row['experience'];
            $mail=$row['mail'];
            if ($competance==$competancecv){
                $score=$score+5;
              }
              $score=$score+($salary/100);
            if ($diplomas!=$diplomascv){
                $score=$score*0;
            }
              $table.='<tr>
              <td>'.$name.'</td>
              <td>'.$competance.'</td>
              <td>'.$diplomas.'</td>
              <td>'.$experience.'</td>
              <td>'.$score.'</td>
              <td>'.$mail.'</td>
              <td> <select name="stat" id="sel" required>
              <option disabled selected>Decision</option>
              <option>Accept</option>
              <option>Denied</option>
              <option>Pending</option>
          </select>        
          </td>
          <td><input class="desi" type="submit" value="Confirme" onclick="pass()"></td>
          <div class="alert hide">
          <span class="fa-solid fa-circle-check"></span>
          <span class="msg">Success : Decision Taken  !</span>
          <div class="close-btn">
             <span class="fas fa-times"></span>
          </div>
       </div>
     <br>   
          </tr>';
            
        }
        $table.='</table>';
        echo $table;
    ?>






                    </tbody>
                </table>
            </section>
        </main>

<script>
const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}

// 3. Converting HTML table to PDF

const pdf_btn = document.querySelector('#toPDF');
const customers_table = document.querySelector('#customers_table');

const toPDF = function (customers_table) {
    const html_code = `
    <link rel="stylesheet" href="style.css">
    <main class="table" >${customers_table.innerHTML}</main>
    `;

    const new_window = window.open();
    new_window.document.write(html_code);

    setTimeout(() => {
        new_window.print();
        new_window.close();
    }, 400);
}
/*
pdf_btn.onclick = () => {
    toPDF(customers_table);
}*/

// 4. Converting HTML table to JSON

const json_btn = document.querySelector('#toJSON');

const toJSON = function (table) {
    let table_data = [],
        t_head = [],

        t_headings = table.querySelectorAll('th'),
        t_rows = table.querySelectorAll('tbody tr');

    for (let t_heading of t_headings) {
        let actual_head = t_heading.textContent.trim().split(' ');

        t_head.push(actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase());
    }

    t_rows.forEach(row => {
        const row_object = {},
            t_cells = row.querySelectorAll('td');

        t_cells.forEach((t_cell, cell_index) => {
            const img = t_cell.querySelector('img');
            if (img) {
                row_object['customer image'] = decodeURIComponent(img.src);
            }
            row_object[t_head[cell_index]] = t_cell.textContent.trim();
        })
        table_data.push(row_object);
    })

    return JSON.stringify(table_data, null, 4);
}
/*
json_btn.onclick = () => {
    const json = toJSON(customers_table);
    downloadFile(json, 'json')
}*/

// 5. Converting HTML table to CSV File

const csv_btn = document.querySelector('#toCSV');

const toCSV = function (table) {
    // Code For SIMPLE TABLE
    // const t_rows = table.querySelectorAll('tr');
    // return [...t_rows].map(row => {
    //     const cells = row.querySelectorAll('th, td');
    //     return [...cells].map(cell => cell.textContent.trim()).join(',');
    // }).join('\n');

    const t_heads = table.querySelectorAll('th'),
        tbody_rows = table.querySelectorAll('tbody tr');

    const headings = [...t_heads].map(head => {
        let actual_head = head.textContent.trim().split(' ');
        return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
    }).join(',') + ',' + 'image name';

    const table_data = [...tbody_rows].map(row => {
        const cells = row.querySelectorAll('td'),
            img = decodeURIComponent(row.querySelector('img').src),
            data_without_img = [...cells].map(cell => cell.textContent.replace(/,/g, ".").trim()).join(',');

        return data_without_img + ',' + img;
    }).join('\n');

    return headings + '\n' + table_data;
}
/*
csv_btn.onclick = () => {
    const csv = toCSV(customers_table);
    downloadFile(csv, 'csv', 'customer orders');
}*/

// 6. Converting HTML table to EXCEL File

const excel_btn = document.querySelector('#toEXCEL');

const toExcel = function (table) {
    // Code For SIMPLE TABLE
    // const t_rows = table.querySelectorAll('tr');
    // return [...t_rows].map(row => {
    //     const cells = row.querySelectorAll('th, td');
    //     return [...cells].map(cell => cell.textContent.trim()).join('\t');
    // }).join('\n');

    const t_heads = table.querySelectorAll('th'),
        tbody_rows = table.querySelectorAll('tbody tr');

    const headings = [...t_heads].map(head => {
        let actual_head = head.textContent.trim().split(' ');
        return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
    }).join('\t') + '\t' + 'image name';

    const table_data = [...tbody_rows].map(row => {
        const cells = row.querySelectorAll('td'),
            img = decodeURIComponent(row.querySelector('img').src),
            data_without_img = [...cells].map(cell => cell.textContent.trim()).join('\t');

        return data_without_img + '\t' + img;
    }).join('\n');

    return headings + '\n' + table_data;
}
/*
excel_btn.onclick = () => {
    const excel = toExcel(customers_table);
    downloadFile(excel, 'excel');
}
*/
const downloadFile = function (data, fileType, fileName = '') {
    const a = document.createElement('a');
    a.download = fileName;
    const mime_types = {
        'json': 'application/json',
        'csv': 'text/csv',
        'excel': 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    }
    a.href = `
        data:${mime_types[fileType]};charset=utf-8,${encodeURIComponent(data)}
    `;
    document.body.appendChild(a);
    a.click();
    a.remove();
}

function pass(){
    var text = document.getElementById("sel").value;
    localStorage.setItem("ddvalue",text);
    return true ; 
    
    }


/*
function calculerScoreDemandeur(offre, demandeur) {
  let score = 0;

  // Calcul du score en fonction des compétences communes
  let competencesCommunes = offre.competences.filter(c => demandeur.competences.includes(c));
  score += 5 * competencesCommunes.length;

  // Calcul du score en fonction de l'expérience
  if (demandeur.anneesExperience >= offre.anneesExperience) {
    score += 2 * demandeur.anneesExperience;
  }

  // Si le diplôme ne correspond pas, le score est multiplié par 0
  if (demandeur.diplome !== offre.diplome) {
    score *= 0;
  }

  return score;
}
*/
$('input').click(function(){
    $('.alert').addClass("show");
    $('.alert').removeClass("hide");
    $('.alert').addClass("showAlert");
    setTimeout(function(){
      $('.alert').removeClass("show");
      $('.alert').addClass("hide");
    },5000);
  });
  $('.close-btn').click(function(){
    $('.alert').removeClass("show");
    $('.alert').addClass("hide");
  });

</script>


 



	</body>
</html>