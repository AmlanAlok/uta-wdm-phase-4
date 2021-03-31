<?php 

require '../../service/AdminService.php';

var_dump($_GET);

$userId = $_GET['user_id'];
echo "userId = $userId";


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    var_dump($_POST);

    $adminService = new AdminService();
    $adminService->checkFeature($userId);

}

?>


<!DOCTYPE html>
<title> YouareonDefault </title>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles.css">
    <script src="https://kit.fontawesome.com/ece9692bda.js" crossorigin="anonymous"></script>
</head>

<body>

    <script src="admin.js"></script>

    <div>
        <div class="left-panel">

            <div class="logo-and-menu">
                <div id="logo" class="logo">
                    <h1>City View</h1>
                </div>

                <div class="menu-bar">
                    <a href="javascript:void(0);" id="menu-icon" onclick="menuFunction()">
                        <div class="menu-icon">
                            <i class="menu-size fas fa-bars"></i>
                        </div>
                    </a>
                </div>
            </div>

            <div id="sidebar" class="sidebar">
                <button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'add-subdivision')">Add Subdivision</button>
                <button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'add-building')">Add Building</button>
                <button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'reset-credentials')">Reset Credentials</button>

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'master-record-menu')">Master Record<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="master-record-menu" class="master-record-menu">
                    <a href="#subdivision-manager-details"><button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'subdivision-manager-details')">Subdivision Manager Details</button></a>
                    <a href="#building-manager-details"><button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'building-manager-details')">Building Manager Details</button></a>
                    <a href="#apartment-details"><button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'apartment-details')">Apartment Owners Details</button></a>
                </div>

                <button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'manage-it-requests')">IT
                    Requests</button>

                <button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'contact-us-messages')">Contact Us Messages</button>

                <a href="../../index.html">
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'sign-out')">Sign
                        out</button>
                </a>
                
            </div>
        </div>


        <div class="main-content">

            <div class="page-heading">
                <h1>Admin </h1>
            </div>
            
            <div id="reset-credentials" class="section-content">
                <div class="section-heading"><h1>Reset Credentials</h1></div>

                <div class="input-box">
                    
                        <table>
                            <tr>
                                <td><label for="user-id">User Id:</label></td>
                                <td><input type="text" id="user-id" name="user-id" class="" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><label for="new-password">New Password:</label></td>
                                <td><input type="text" id="new-password" name="new-password" class="" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><label for="comfirm-password">Comfirm Password:</label></td>
                                <td><input type="text" id="comfirm-password" name="comfirm-password" class="" placeholder=""></td>
                            </tr>
                            
                        </table>
                        <button class="submit-button">Submit</button>
                       
                    
                </div>
            </div>

            <div id="add-subdivision" class="section-content">
                <div class="section-heading"><h1>Add Subdivision</h1></div>

                <div class="input-box">
                    <form method="POST">
                        <table>
                        <tr>
                            <td><label for="new-subdivision-name">New Subdivision Name:</label></td>
                            <td><input type="text" id="new-subdivision-name" name="new-subdivision-name" class="" placeholder=""></td>
                        </tr>
                        
                        </table>
                        <button class="submit-button">Submit</button>

                    </form>
                    
                </div>
            </div>

            <div id="add-building" class="section-content">
                <div class="section-heading"><h1>Add Building</h1></div>

                <div class="input-box">
                    <table>
                        <tr>
                            <td><label for="subdivision-name">Select Subdivision Name:</label></td>
                            <td><select id="subdivision-name" name="subdivision-name" class="">
                                <optgroup label="Subdivision Names">
                                    <option value="greenland">Greenland</option>
                                    <option value="winterfell">Winterfell</option>
                                    <option value="centennial">Centennial</option>
                                  </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">New Building Name:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Enter Apartment Numbers:</label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 1 - Apartment 1:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 1 - Apartment 2:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 1 - Apartment 3:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 1 - Apartment 4:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 2 - Apartment 1:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 2 - Apartment 2:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 2 - Apartment 3:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 2 - Apartment 4:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>

                        <tr>
                            <td><label for="new-building-name">Floor 3 - Apartment 1:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 3 - Apartment 2:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 3 - Apartment 3:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 3 - Apartment 4:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 4 - Apartment 1:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 4 - Apartment 2:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 4 - Apartment 3:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><label for="new-building-name">Floor 4 - Apartment 4:</label></td>
                            <td><input type="text" id="new-building-name" name="new-building-name" class="" placeholder=""></td>
                        </tr>
                        
                    </table>
                    <button class="submit-button">Submit</button>
                    
                </div>
            </div>

            <!-- Admin Apartment Owner Details -->

            <div id="apartment-details" class="section-content">
                <div class="section-heading"><h1>Apartment Details</h1></div>
                <h3>Apartment Owner List</h3>
                <div>

                    <div class="view-data-list">
                        <a href="#apartment-owner-detail-1">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'apartment-owner-detail-1')">
                                Apartment Number: 101 <br />
                                Building Name: Emerald
                            </button>
                        </a>
                        <a href="#apartment-owner-detail-2">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'apartment-owner-detail-2')">
                                Apartment Number: 102 <br />
                                Building Name: Emerald
                            </button>
                        </a>
                        <a href="#apartment-owner-detail-2">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'apartment-owner-detail-3')">
                                Apartment Number: 103 <br />
                                Building Name: Ruby
                            </button>
                        </a>
                        <a href="#apartment-owner-detail-2">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'apartment-owner-detail-4')">
                                Apartment Number: 104 <br />
                                Building Name: Ruby
                            </button>
                        </a>
        
                    </div>

                    <div class="view-data">
                        <div id="apartment-owner-detail-1" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Emerald</td></tr>
                                    <tr><td>Apartment Number</td><td>101</td></tr><tr><td>First Name</td><td>Amlan</td></tr><tr><td>Last Name</td><td>Alok</td></tr>
                                    <tr><td>Email Id</td><td>amlanalok@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="apartment-owner-detail-2" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Emerald</td></tr>
                                    <tr><td>Apartment Number</td><td>102</td></tr><tr><td>First Name</td><td>Kishore</td></tr><tr><td>Last Name</td><td>Chary</td></tr>
                                    <tr><td>Email Id</td><td>kishore@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="apartment-owner-detail-3" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Ruby</td></tr>
                                    <tr><td>Apartment Number</td><td>103</td></tr><tr><td>First Name</td><td>Rakshita</td></tr><tr><td>Last Name</td><td>K</td></tr>
                                    <tr><td>Email Id</td><td>rakshita@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="apartment-owner-detail-4" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Ruby</td></tr>
                                    <tr><td>Apartment Number</td><td>104</td></tr><tr><td>First Name</td><td>Alok</td></tr><tr><td>Last Name</td><td>Alok</td></tr>
                                    <tr><td>Email Id</td><td>alok@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Admin Building Manager Details -->

            <div id="building-manager-details" class="section-content">
                <div class="section-heading"><h1>Building Manager Details</h1></div>
                <h3>Building Manager List</h3>
                <div>

                    <div class="view-data-list">
                        <a href="#building-manager-detail-1">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'building-manager-detail-1')">
                                Amlan <br />
                                Building Name: Emerald
                            </button>
                        </a>
                        <a href="#building-manager-detail-2">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'building-manager-detail-2')">
                                Kishore <br />
                                Building Name: Sapphire
                            </button>
                        </a>
                        <a href="#building-manager-detail-2">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'building-manager-detail-3')">
                                Rakshita <br />
                                Building Name: Ruby
                            </button>
                        </a>
                        <a href="#building-manager-detail-2">
                            <button class="apartment-owner-detail-tile" onclick="viewApartmentDetails(event, 'building-manager-detail-4')">
                                Alok <br />
                                Building Name: Diamond
                            </button>
                        </a>
        
                    </div>

                    <div class="view-data">
                        <div id="building-manager-detail-1" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Emerald</td></tr><tr><td>First Name</td><td>Amlan</td></tr><tr><td>Last Name</td><td>Alok</td></tr>
                                    <tr><td>Email Id</td><td>amlanalok@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="building-manager-detail-2" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Sapphire</td></tr><tr><td>First Name</td><td>Kishore</td></tr><tr><td>Last Name</td><td>Chary</td></tr>
                                    <tr><td>Email Id</td><td>kishore@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="building-manager-detail-3" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Ruby</td></tr><tr><td>First Name</td><td>Rakshita</td></tr><tr><td>Last Name</td><td>K</td></tr>
                                    <tr><td>Email Id</td><td>rakshita@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="building-manager-detail-4" class="apartment-owner-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Building Name</td><td>Diamond</td></tr></tr><tr><td>First Name</td><td>Alok</td></tr><tr><td>Last Name</td><td>Alok</td></tr>
                                    <tr><td>Email Id</td><td>alok@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Admin Subdivision Manager Details -->

            <div id="subdivision-manager-details" class="section-content">
                <div class="section-heading"><h1>Subdivision Manager Details</h1></div>
                <h3>Subdivision Manager List</h3>
                <div>

                    <div class="view-data-list">
                        <a href="#subdivision-manager-detail-1">
                            <button class="subdivision-manager-detail-tile" onclick="viewSubdivisionDetails(event, 'subdivision-manager-detail-1')">
                                Amlan <br />
                                Subdivision Name: Winterfell
                            </button>
                        </a>
                        <a href="#subdivision-manager-detail-2">
                            <button class="subdivision-manager-detail-tile" onclick="viewSubdivisionDetails(event, 'subdivision-manager-detail-2')">
                                Kishore <br />
                                Subdivision Name: Greenland
                            </button>
                        </a>
                        <a href="#subdivision-manager-detail-2">
                            <button class="subdivision-manager-detail-tile" onclick="viewSubdivisionDetails(event, 'subdivision-manager-detail-3')">
                                Rakshita <br />
                                Subdivision Name: Centennial
                            </button>
                        </a>
                        <a href="#subdivision-manager-detail-2">
                            <button class="subdivision-manager-detail-tile" onclick="viewSubdivisionDetails(event, 'subdivision-manager-detail-4')">
                                Alok <br />
                                Subdivision Name: Rocky Mountain
                            </button>
                        </a>
        
                    </div>

                    <div class="view-data">
                        <div id="subdivision-manager-detail-1" class="subdivision-manager-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Subdivision Name</td><td>Emerald</td></tr><tr><td>First Name</td><td>Amlan</td></tr><tr><td>Last Name</td><td>Alok</td></tr>
                                    <tr><td>Email Id</td><td>amlanalok@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="subdivision-manager-detail-2" class="subdivision-manager-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Subdivision Name</td><td>Sapphire</td></tr><tr><td>First Name</td><td>Kishore</td></tr><tr><td>Last Name</td><td>Chary</td></tr>
                                    <tr><td>Email Id</td><td>kishore@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="subdivision-manager-detail-3" class="subdivision-manager-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Subdivision Name</td><td>Ruby</td></tr><tr><td>First Name</td><td>Rakshita</td></tr><tr><td>Last Name</td><td>K</td></tr>
                                    <tr><td>Email Id</td><td>rakshita@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                        <div id="subdivision-manager-detail-4" class="subdivision-manager-detail">
                            <div class="apartment-personal-details-table">
                                <table>
                                    <tr><td>Subdivision Name</td><td>Diamond</td></tr></tr><tr><td>First Name</td><td>Alok</td></tr><tr><td>Last Name</td><td>Alok</td></tr>
                                    <tr><td>Email Id</td><td>alok@gmail.com</td></tr><tr><td>Phone Number</td><td>1231231234</td></tr><tr><td>Joining Date</td><td>01/19/2021</td></tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Subdivision Manager View IT Requests -->

            <div id="manage-it-requests" class="section-content">
                <div class="section-heading">
                    <h1>IT Request</h1>
                </div>
                <h3>Manage IT Request</h3>
                <div>

                    <div class="it-request-list">
                        <a href='#it-1'>
                            <button class="it-request" onclick="viewItDetails(event, 'it-1')">
                                IT Request ID: 1 <br />
                                Date: 01/27/2021 <br />
                                Status: In-Progress
                            </button>
                        </a>
                        <a href='#it-2'>
                            <button class="it-request" onclick="viewItDetails(event, 'it-2')">
                                IT Request ID: 2 <br />
                                Date: 02/09/2021 <br />
                                Status: Completed
                            </button>
                        </a>
                        <a href='#it-3'>
                            <button class="it-request" onclick="viewItDetails(event, 'it-3')">
                                IT Request ID: 1 <br />
                                Date: 01/27/2021 <br />
                                Status: Open
                            </button>
                        </a>
                    </div>

                    <div class="display-it-request">
                        <div id="it-1" class="it-request-details">
                            <h3>Datetime</h3>
                            <p>01/27/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Something not working.</p>
                            <h3>Status</h3>
                            <p>In-progress</p>

                            <div class="status-change-button-position">
                                <button class="status-change-button">Completed</button>
                            </div>
                        </div>

                        <div id="it-2" class="it-request-details">
                            <h3>Datetime</h3>
                            <p>02/09/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Need access to something.</p>
                            <h3>Status</h3>
                            <p>Completed</p>
                        </div>

                        <div id="it-3" class="it-request-details">
                            <h3>Datetime</h3>
                            <p>01/27/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Something not working.</p>
                            <h3>Status</h3>
                            <p>Open</p>

                            <div class="status-change-button-position">
                                <button class="status-change-button">In-progress</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Contact Us Messages -->

            <div id="contact-us-messages" class="section-content">
                <div class="section-heading">
                    <h1>Contact Us Messages</h1>
                </div>
                <h3>View Contact Us Messages</h3>
                <div>

                    <div class="it-request-list">
                        <a href='#contact-us-message-1'>
                            <button class="contact-us" onclick="viewContactUsDetails(event, 'contact-us-message-1')">
                                Contact Us Message ID: 1 <br />
                                Date: 01/27/2021 
                            </button>
                        </a>
                        <a href='#contact-us-message-2'>
                            <button class="contact-us" onclick="viewContactUsDetails(event, 'contact-us-message-2')">
                                Contact Us Message ID: 2 <br />
                                Date: 02/09/2021 
                            </button>
                        </a>
                        <a href='#contact-us-message-3'>
                            <button class="contact-us" onclick="viewContactUsDetails(event, 'contact-us-message-3')">
                                Contact Us Message ID: 1 <br />
                                Date: 01/27/2021 
                            </button>
                        </a>
                    </div>

                    <div class="display-it-request">
                        <div id="contact-us-message-1" class="contact-us-details">
                            <table>
                                <tr><td>First Name:</td><td>Amlan</td></tr>
                                <tr><td>Last Name:</td><td>Alok</td></tr>
                                <tr><td>Email:</td><td>amlanalok@gmail.com</td></tr>
                                <tr><td>Phone Number:</td><td>1231231234</td></tr>
                                <tr><td>Message:</td><td>Can I get price details</td></tr>
                            </table>
                        </div>

                        <div id="contact-us-message-2" class="contact-us-details">
                            <table>
                                <tr><td>First Name:</td><td>Kishore</td></tr>
                                <tr><td>Last Name:</td><td>Vadla</td></tr>
                                <tr><td>Email:</td><td>kishore@gmail.com</td></tr>
                                <tr><td>Phone Number:</td><td>1231231234</td></tr>
                                <tr><td>Message:</td><td>Can I get price details</td></tr>
                            </table>
                        </div>

                        <div id="contact-us-message-3" class="contact-us-details">
                            <table>
                                <tr><td>First Name:</td><td>Rakshita</td></tr>
                                <tr><td>Last Name:</td><td>Khadabadi</td></tr>
                                <tr><td>Email:</td><td>rakshita@gmail.com</td></tr>
                                <tr><td>Phone Number:</td><td>1231231234</td></tr>
                                <tr><td>Message:</td><td>Can I get price details</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>