<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Financial Dashboard </title>
    <!-- MATERIAL CDN -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"/>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../css/style.css">
  <body> 
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="../img/logo.jpg" />
            <h2 cla>TGT<span class="danger">EFT</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>

        <div class="sidebar">
          <a href="index.php" class="active">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">person_outline</span>
            <h3>Customers</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Orders</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">insights</span>
            <h3>Analytics</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">mail_outline</span>
            <h3>Messages</h3>
            <span class="message-count">26</span>
          </a>
          <a href="#">
            <span class="material-icons-sharp">inventory</span>
            <h3>Products</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">report_gmailerrorred</span>
            <h3>Reports</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp">settings</span>
            <h3>Settings</h3>
          </a>
          </a>
          <a href="signup.php">
            <span class="material-icons-sharp">logout</span>
            <h3>Login</h3>
          </a>
        </div>
      </aside>
      <!------------------ END OF ASIDE ------------------>
      <main>
        <h1>Dashoard</h1>

        <div class="date">
          <input type="date" />
        </div>

        <div class="insights">
          <div class="sales">
            <span class="material-icons-sharp">pie_chart</span>
            <div class="middle">
              <div class="left">
                <h3>Popular Product</h3>
                <h1>GPS 4k DRONE</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>33%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>
          <!------------ END OF SALES -------------->
          <div class="expenses">
            <span class="material-icons-sharp">person_add</span>
            <div class="middle">
              <div class="left">
                <h3>New Users</h3>
                <h1>141</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>62%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>
          <!------------ END OF EXPENSES -------------->
          <div class="income">
            <span class="material-icons-sharp">stacked_line_chart</span>
            <div class="middle">
              <div class="left">
                <h3>Active Users</h3>
                <h1>478</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>44%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>
          <!------------ END OF INCOME -------------->
        </div>
        <!------------ END OF INSIGHTS -------------->

        <div class="recent-orders">
          <h2>Recent Orders</h2>
          <table>
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Number</th>
                <th>In Stock</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>

          <a href="#">Show All</a>
        </div>
      </main>
      <!----------------- END OF MAIN -------------------->

      <div class="right">
        <div class="top">
          <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
          </button>
          <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
          </div>
          <div class="profile">
            <div class="info">
              <p>Hey, <b>User</b></p> <!----------- Permission Tag ----------->
              <small class="text-muted">User</small>
            </div>
            <div class="profile-photo">
              <img src="../img/user.png" />
            </div>
          </div>
        </div>
        <!-- END OF TOP -->
        <div class="recent-updates">
          <h2>Recent Updates</h2>
          <div class="updates">
            <div class="update">
              <div class="profile-photo">
                <img src="../img/profile-2.jpg" />
              </div>
              <div class="message">
                <p>
                  <b>Tom Hank</b> received his order of Night lion tech GPS
                  drone.
                </p>
                <small class="text-muted">2 Minutes Ago</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="../img/profile-3.jpg" />
              </div>
              <div class="message">
                <p>
                  <b>Shannon Harp</b> received her order of Night lion tech GPS
                  drone.
                </p>
                <small class="text-muted">30 Minutes Ago</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="../img/profile-4.jpg" />
              </div>
              <div class="message">
                <p>
                  <b>Lesley Harp</b> received her order of Night lion tech GPS
                  drone.
                </p>
                <small class="text-muted">39 Minutes Ago</small>
              </div>
            </div>
          </div>
        </div>
        <!----------------- END OF RECENT UPDATES -------------------->
        <div class="sales-analytics">
          <h2>Sales Analytics</h2>
          <div class="item online">
            <div class="icon">
              <span class="material-icons-sharp">shopping_cart</span>
            </div>
            <div class="right">
              <div class="info">
                <h3>ONLINE ORDERS</h3>
                <small class="text-muted">Last 24 Hours</small>
              </div>
              <h5 class="success">+39%</h5>
              <h3>3849</h3>
            </div>
          </div>
          <div class="item offline">
            <div class="icon">
              <span class="material-icons-sharp">local_mall</span>
            </div>
            <div class="right">
              <div class="info">
                <h3>OFFLINE ORDERS</h3>
                <small class="text-muted">Last 24 Hours</small>
              </div>
              <h5 class="danger">-17%</h5>
              <h3>1100</h3>
            </div>
          </div>
          <div class="item customers">
            <div class="icon">
              <span class="material-icons-sharp">person</span>
            </div>
            <div class="right">
              <div class="info">
                <h3>NEW CUSTOMERS</h3>
                <small class="text-muted">Last 24 Hours</small>
              </div>
              <h5 class="success">+25%</h5>
              <h3>849</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/products.js"></script>
    <script src="../js/index1.js"></script>
  </body>
</html>
