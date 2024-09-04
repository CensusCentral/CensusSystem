<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>CUDHAO</title>
    <link rel="stylesheet" href="css/barangay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

        <!-- for style and design link -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- script for popping modal -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                <h1>Members</h1>
                <small>Home / Members</small>
            </div>
            
            <div class="page-content">
                <!-- Content here -->
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Barangay <b>Uno</b></h2>
                                    <div class="dropdown">
                                        <button id="barangay-btn" class="btn" onclick="highlightButton('barangay')">Barangay</button>
                                        <div class="dropdown-content">
                                            <a href="for" onclick="selectBarangay('Baclaran')">Baclaran</a>
                                            <a href="{{url('dashboard')}}" onclick="selectBarangay('Banay-Banay')">Banay-Banay</a>
                                            <a href="#" onclick="selectBarangay('Banlic')">Banlic</a>
                                            <a href="#" onclick="selectBarangay('Bigaa')">Bigaa</a>
                                            <a href="#" onclick="selectBarangay('Butong')">Butong</a>
                                            <a href="#" onclick="selectBarangay('Casile')">Casile</a>
                                            <a href="#" onclick="selectBarangay('Diezmo')">Diezmo</a>
                                            <a href="#" onclick="selectBarangay('Gulod')">Gulod</a>
                                            <a href="#" onclick="selectBarangay('Mamatid')">Mamatid</a>
                                            <a href="#" onclick="selectBarangay('Marinig')">Marinig</a>
                                            <a href="#" onclick="selectBarangay('Niugan')">Niugan</a>
                                            <a href="#" onclick="selectBarangay('Pittland')">Pittland</a>
                                            <a href="#" onclick="selectBarangay('Pulo')">Pulo</a>
                                            <a href="#" onclick="selectBarangay('Sala')">Sala</a>
                                            <a href="#" onclick="selectBarangay('San Isidro')">San Isidro</a>
                                            <a href="#" onclick="selectBarangay('Barangay I Poblacion')">Barangay I Poblacion</a>
                                            <a href="#" onclick="selectBarangay('Barangay II Poblacion')">Barangay II Poblacion</a>
                                            <a href="#" onclick="selectBarangay('Barangay III Poblacion')">Barangay III Poblacion</a>   
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                        <div class="search-box">
                                            <div class="input-group">								
                                                <input type="text" id="search" class="form-control" placeholder="Search by Name">
                                                <a href="" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Member</span></a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>ID</th> 
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Maiden Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($isfheads as $isfhead)
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td>{{ $isfhead->id }}</td>
                                    <td>{{ $isfhead->lastName }}</td>
                                    <td>{{ $isfhead->firstName }}</td>
                                    <td>{{ $isfhead->middleName }}</td>
                                    <td>{{ $isfhead->maidenName }}</td>
                                       
                                    <td>
                                        <a href=" " class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">&#xe417;</i></a>
                                        <a href="#editMember" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <a href="#deleteMember" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                        

                                

                                @endforeach
                            </tbody>
                        </table>

                        {{-- FOR NAVIGATION OF PAGINATION --}}
                        <div class="clearfix">
                            <div class="hint-text">
                                Showing <b>{{ $isfheads->firstItem() }}</b> to <b>{{ $isfheads->lastItem() }}</b> of <b>{{ $isfheads->total() }}</b> entries
                            </div>
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($isfheads->onFirstPage())
                                    <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                                @else
                                    <li class="page-item"><a href="{{ $isfheads->previousPageUrl() }}" class="page-link">Previous</a></li>
                                @endif
                        
                                {{-- Pagination Elements --}}
                                @foreach ($isfheads->links()->elements[0] as $page => $url)
                                    @if ($page == $isfheads->currentPage())
                                        <li class="page-item active"><a href="#" class="page-link">{{ $page }}</a></li>
                                    @else
                                        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                        
                                {{-- Next Page Link --}}
                                @if ($isfheads->hasMorePages())
                                    <li class="page-item"><a href="{{ $isfheads->nextPageUrl() }}" class="page-link">Next</a></li>
                                @else
                                    <li class="page-item disabled"><a href="#" class="page-link">Next</a></li>
                                @endif
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editMember" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">						
                                    <h4 class="modal-title">Edit Member</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">					
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" required>
                                    </div>					
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-info" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Delete Modal HTML -->
                <div id="deleteMember" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">						
                                    <h4 class="modal-title">Delete Member</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">					
                                    <p>Are you sure you want to delete these Records?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            
            </div>
            
        </main>
        
    </div>

    <!-- javascript for charts -->
    <script src="js/barangay.js"></script>
</body>
</html>