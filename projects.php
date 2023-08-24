<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    .book {
        padding: 20px;
        margin-bottom: 6%;
  position: relative;
  border-radius: 10px;
  width: 500px;
    height: 388px;
  background-color: whitesmoke;
  -webkit-box-shadow: 1px 1px 12px #000;
  box-shadow: 1px 1px 12px #000;
  -webkit-transform: preserve-3d;
  -ms-transform: preserve-3d;
  transform: preserve-3d;
  -webkit-perspective: 2000px;
  perspective: 2000px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #000;
}

.cover {
  top: 0;
  position: absolute;
  background-color: lightgray;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  cursor: pointer;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  -webkit-transform-origin: 0;
  -ms-transform-origin: 0;
  transform-origin: 0;
  -webkit-box-shadow: 1px 1px 12px #000;
  box-shadow: 1px 1px 12px #0000;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  flex-direction: column;
  padding: 10px;
}

.book:hover .cover {
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  -webkit-transform: rotatey(-80deg);
  -ms-transform: rotatey(-80deg);
  transform: rotatey(-80deg);
}

.book p {
    font-size: 17px;
    line-height: initial;
    padding: 10px;
    margin-left: 2rem;
}
@media (max-width: 628px) {
    .book p {
    font-size: 15px;
  }
}
   </style>
</head>
<body>
    

<div class="book">
<p> • Developed a web-based library management system using PHP,
    MySQL, and JavaScript. <br><br>
    • Implemented features for managing books, members and issuing/returning books.<br><br>
    • Designed a user-friendly interface with responsive design using
    HTML, CSS, and Bootstrap.<br><br>
    • Implemented search and filter functionalities for efficient book
    management.<br><br>
    • This project is currently being used in my college
  </p>

    <div class="cover">
        <div class="heading"><p>LIBRARY MANAGEMENT SYSTEM</p></div>
        <div class="img">
            <img style=" width: 100%;" src="Screenshot 2023-06-15 203520.png" alt="">
        </div>
    </div>
   </div>


<div class="book">
<p>• Built a web application using PHP, MySQL, and JavaScript for
    managing employee salaries in the college.<br><br>
    • Developed functionalities for salary calculation, deduction, and
    generating payslips.<br><br>
    • Implemented user authentication and access control to ensure
    data privacy and security.<br><br>
    • Designed and developed a user-friendly interface to facilitate
    easy salary management.<br><br>
    • This project is currently being used in my college.
  </p>

    <div class="cover">
        <div class="heading"><p>SALARY MANAGEMENT SYSTEM</p></div>
        <div class="img">
            <img style=" width: 26.5rem;" src="https://eduxpert.in/wp-content/uploads/2018/10/payroll-management-system-500x500.jpg" alt="">
        </div>
    </div>
   </div>


<div class="book">
<p>
    • Implemented a user-friendly interface for cashiers to scan products, calculate totals, and generate receipts.<br><br>
    • Designed an admin panel for store managers to manage product inventory, pricing, and generate sales reports.<br><br>
    • Technologies used: PHP, HTML, CSS, JavaScript, MySQL.
  </p>

    <div class="cover">
        <div class="heading"><p>SUPERMARKET BILLING SYSTEM WITH ADMIN PANEL</p></div>
        <div class="img">
            <img style=" width: 30rem;" src="data:image/jpeg;base64,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" alt="">
        </div>
    </div>
   </div>

</body>
</html>