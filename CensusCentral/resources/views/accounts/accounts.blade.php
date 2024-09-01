<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUDHAO</title>
    <link rel="stylesheet" href="css/accounts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>C<span>abuyao</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(images/cudhaoLogo.png)"></div>
                <h4>CUDHAO</h4>
                <small>Administrator</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="{{url('dashboard')}}" class="active">
                            <span class="fas fa-desktop"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="fas fa-th"></span>
                            <small>Census Form</small>
                        </a>
                    </li>
                    <li>
                       <a href="{{url('barangay')}}">
                            <span class="fas fa-table"></span>
                            <small>Members</small>
                        </a>
                    </li>
                    <li>
                       <a href="{{url('reports')}}">
                            <span class="fas fa-chart-bar"></span>
                            <small>Reports</small>
                        </a>
                    </li>
                    <li>
                       <a href="{{url('penalties')}}">
                            <span class="fas fa-exclamation-triangle"></span>
                            <small>Penalties</small>
                        </a>
                    </li>
                    <li>
                       <a href="{{url('analysis')}}">
                            <span class="fas fa-clipboard"></span>
                            <small>Analysis</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('accounts')}}">
                             <span class="fas fa-address-book"></span>
                             <small>Accounts</small>
                         </a>
                     </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <div class="user">
                        <div class="bg-img" style="background-image: url(images/cudhaoLogo.png)"></div>
                        
                        <span class="las la-power-off"></span>
                        <a href="{{url('login')}}"><span class="logout" >Logout</span></a>
                    </div>
                </div>
            </div>
        </header>
        
        <main>
            <div class="page-header">
                <h1>Accounts</h1>
                <small>Home / Accounts</small>
            </div>
            
            <div class="page-content">
                <div class="table-header">
                    <h2>Accounts List</h2>
                    <button class="add-account-btn">Add Account</button>
                </div>
                
                <table class="accounts-table">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>User Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="accountsTableBody">
                        <!-- Account rows will be added here dynamically -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Add Account Modal -->
    <div id="addAccountModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Add Account</h2>
            <form id="addAccountForm">
                <label for="username">Username:</label>
                <input type="text" id="username" required>
                
                <label for="password">Password:</label>
                <div class="password-container">
                    <input type="password" id="password" required>
                    <button type="button" class="toggle-password-visibility"><i class="fas fa-eye"></i></button>
                </div>
                
                <label for="confirm-password">Confirm Password:</label>
                <div class="password-container">
                    <input type="password" id="confirm-password" required>
                    <button type="button" class="toggle-password-visibility"><i class="fas fa-eye"></i></button>
                </div>

                <label for="user-type">User Type:</label>
            <select id="user-type" name="user-type" required>
                <option value="Admin">Admin</option>
                <option value="Survey Team">Survey Team</option>
                <option value="4Ps Admin">4Ps Admin</option>
            </select>
                
                <button type="submit">Add</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Edit Account Modal -->
    <div id="editAccountModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Edit Account</h2>
            <form id="editAccountForm">
                <label for="edit-username">Username:</label>
                <input type="text" id="edit-username" required readonly>
                
                <label for="edit-password">New Password:</label>
                <div class="password-container">
                    <input type="password" id="edit-password">
                    <button type="button" class="toggle-password-visibility"><i class="fas fa-eye"></i></button>
                </div>
                
                <label for="edit-confirm-password">Confirm New Password:</label>
                <div class="password-container">
                    <input type="password" id="edit-confirm-password">
                    <button type="button" class="toggle-password-visibility"><i class="fas fa-eye"></i></button>
                </div>

                <label for="edit-user-type">User Type:</label>
                <input type="text" id="edit-user-type" name="edit-user-type" readonly>
                
                <button type="submit">Update</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </form>
        </div>
    </div>

    <script src="js/accounts.js"></script>
</body>
</html>