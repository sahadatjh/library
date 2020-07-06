@extends('backend.master')
@section('content')<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>Student Details</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Details Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>About Me</h3>
            </div>
            <div class="pull-right">
                <form action="" class="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search By Roll" maxlength="6">
                    </div>
                    {{-- <div class="form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div> --}}
                </form>
            </div>
        </div>
        <hr><hr>
        <div class="single-info-details">
            <div class="item-img">
                <img src="img/figure/student1.jpg" alt="student">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium">Jessia Rose</h3>
                    <div class="header-elements">
                        <ul>
                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                        </ul>
                    </div>
                </div>
                <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale 
                word moun taiery.Aliquam erat volutpaturabiene natis massa sedde  sodale 
                word moun taiery.</p>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                            <tr>
                                <td>Name:</td>
                                <td class="font-medium text-dark-medium">Jessia Rose</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class="font-medium text-dark-medium">Female</td>
                            </tr>
                            <tr>
                                <td>Father Name:</td>
                                <td class="font-medium text-dark-medium">Steve Jones</td>
                            </tr>
                            <tr>
                                <td>Mother Name:</td>
                                <td class="font-medium text-dark-medium">Naomi Rose</td>
                            </tr>
                            <tr>
                                <td>Date Of Birth:</td>
                                <td class="font-medium text-dark-medium">07.08.2016</td>
                            </tr>
                            <tr>
                                <td>Religion:</td>
                                <td class="font-medium text-dark-medium">Islam</td>
                            </tr>
                            <tr>
                                <td>Father Occupation:</td>
                                <td class="font-medium text-dark-medium">Graphic Designer</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class="font-medium text-dark-medium">jessiarose@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Admission Date:</td>
                                <td class="font-medium text-dark-medium">07.08.2019</td>
                            </tr>
                            <tr>
                                <td>Class:</td>
                                <td class="font-medium text-dark-medium">2</td>
                            </tr>
                            <tr>
                                <td>Section:</td>
                                <td class="font-medium text-dark-medium">Pink</td>
                            </tr>
                            <tr>
                                <td>Roll:</td>
                                <td class="font-medium text-dark-medium">10005</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td class="font-medium text-dark-medium">House #10, Road #6, Australia</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class="font-medium text-dark-medium">+ 88 98568888418</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Student Details Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Students Data</h3>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">...</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-times text-orange-red"></i>Close</a>
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                </div>
            </div>
        </div>
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Class ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">Roll</label>
                            </div>
                        </th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Parents</th>
                        <th>Address</th>
                        <th>Date Of Birth</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0021</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0022</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0023</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0024</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0025</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0026</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0027</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0028</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student9.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0029</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student10.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0030</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0021</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0022</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0023</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0024</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0025</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0026</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0027</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0028</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student9.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0029</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student10.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0030</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0021</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0022</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0023</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0024</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0025</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0026</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0027</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0028</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student9.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0029</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student10.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>A</td>
                        <td>Jack Sparrow </td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0030</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>A</td>
                        <td>Maria Jamans</td>
                        <td>59 Australia, Sydney</td>
                        <td>02/05/2001</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Student Table Area End Here -->

@endsection