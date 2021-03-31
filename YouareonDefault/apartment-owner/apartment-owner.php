<?php 

if ($_SERVER["REQUEST_METHOD"] == "GET"){

    var_dump($_GET);

    $userId = $_GET['user_id'];
    echo "userId = $userId";

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

    <script src="apartment-owner-page.js"></script>

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
                <button class="sidebar-menu-option sidebar-option text-left opacity active" onclick="myFunction(event, 'personal-details')">Personal Details</button>
                
                <button class="sidebar-menu-option sidebar-option text-left opacity" onclick="openMenu(event, 'apartment-dashboard-menu')">Dashboard<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="apartment-dashboard-menu" class="apartment-dashboard-menu">
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'dashboard-home')">Home</button>
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'dashboard-electricity-bill')">Electricity Bill</button>
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'dashboard-water-bill')">Water Bill</button>
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'dashboard-gas-bill')">Gas Bill</button>
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'dashboard-internet-bill')">Internet Bill</button>
                </div>

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'apartment-bill-menu')">Bills<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="apartment-bill-menu" class="apartment-bill-menu">
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'utility-bill')">Utility Bill</button>
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'community-service-bill')">Community Service Bill</button>
                </div>

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'apartment-chat-menu')">Chat<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="apartment-chat-menu" class="apartment-chat-menu">
                    <a href="#building-manager-chat"><button class="apartment-chat-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'building-manager-chat')">Building Manager</button></a>
                    <a href="#subdivision-manager-chat"><button class="apartment-chat-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'subdivision-manager-chat')">Subdivision Manager</button></a>
                </div>

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'apartment-maintenance-request-menu')">Maintenance Requests<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="apartment-maintenance-request-menu" class="apartment-maintenance-request-menu">
                    <button class="apartment-maintenance-request-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'new-maintenance-request')">New Maintenance Request</button>
                    <button class="apartment-maintenance-request-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'view-maintenance-requests')">View Maintenance Requests</button>
                </div>

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'apartment-complaint-menu')">Complaints<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="apartment-complaint-menu" class="apartment-complaint-menu">
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'new-complaint')">New Complaint</button>
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'view-complaints')">View Complaints</button>
                </div>
                <a href="../../index.html">
                    <button class="sidebar-option text-left opacity" onclick="myFunction(event, 'sign-out')">Sign out</button>
                </a>
            </div>
        </div>


        <div class="main-content">

            <div class="page-heading">
                <h1>Apartment Owner </h1>
            </div>
            
            <div id="personal-details" class="show-initial section-content">
                <div class="section-heading"><h1>Personal Details</h1></div>

                <div class="apartment-personal-details-table-position">
                    <div class="apartment-personal-details-table">
                        <table>
                            
                            <tr>
                                <td>User ID</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>Amlan</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>Alok</td>
                            </tr>
                            <tr>
                                <td>Email Id</td>
                                <td>amlanalok@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>1231231234</td>
                            </tr>
                            <tr>
                                <td>Joining Date</td>
                                <td>01/19/2021</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="edit-button-position">
                    <button class="edit-button">Edit</button>
                </div>
            </div>

            <div id="apartment-owner-dashboard" class="section-content">
                <h1>Apartment Owner Dashboard</h1>
            </div>

            <!-- Apartment Owner Utility Bill -->

            <div id="utility-bill" class="section-content">
                <div class="section-heading"><h1>Utility Bill</h1></div>
                
                <div><h2>Month-Year: February-2021</h2></div>

                <div class="apartment-owner-bill-table-position total-bill">
                    <div class="apartment-owner-bill-table">
                        <table>
                            <tr>
                                <th>Utility Name</th>
                                <th>Bill Amount</th>
                            </tr>
                            <tr>
                                <td>Electricity</td>
                                <td>$100.00</td>
                            </tr>
                            <tr>
                                <td>Water</td>
                                <td>$10.00</td>
                            </tr>
                            <tr>
                                <td>Gas</td>
                                <td>$20.00</td>
                            </tr>
                            <tr>
                                <td>Internet</td>
                                <td>$30.00</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>$160.00</td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
            </div>

            <!-- Apartment Owner Community Service Bill -->

            <div id="community-service-bill" class="section-content">
                <div class="section-heading"><h1>Community Service Bill</h1></div>

                <div><h2>Month-Year: February-2021</h2></div>

                <div class="apartment-owner-bill-table-position total-bill">
                    <div class="apartment-owner-bill-table">
                        <table>
                            <tr>
                                <th>Service Name</th>
                                <th>Bill Amount</th>
                            </tr>
                            <tr>
                                <td>Maintenance Fee</td>
                                <td>$100.00</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>$100.00</td>
                            </tr>
                        </table>
                    </div>    
                </div>
            </div>

            <!-- Apartment Owner New Maintenance Requests -->

            <div id="new-maintenance-request" class="section-content">
                <div class="section-heading"><h1>Maintenance Request</h1></div>
                <h3>Create New Maintenance Request</h3>

                <div>
                    <form>
                        <label for="maintenance-request-input-message"><h4>Enter details:</h4></label>
                        <textarea id="maintenance-request-input-message" name="maintenance-request-input-message" class="textarea-size"rows="4" cols="50"></textarea><br/>
                        <input type="submit" value="Submit" class="submit-button">
                    </form>
                </div>
            </div>

            <!-- Apartment Owner View Maintenance Requests -->

            <div id="view-maintenance-requests" class="section-content">
                <div class="section-heading"><h1>Maintenance Request</h1></div>
                <h3>View Maintenance Request</h3>
                <div>

                    <div class="maintenance-request-list">
                        <button class="maintenance-request" onclick="viewMaintenanceDetails(event, 'mr-1')">
                            Maintenance Request ID: 1 <br />
                            Date: 01/27/2021 <br />
                            Status: In-Progress
                        </button>
                        <button class="maintenance-request" onclick="viewMaintenanceDetails(event, 'mr-2')">
                            Maintenance Request ID: 2 <br />
                            Date: 02/09/2021 <br />
                            Status: Completed
                        </button>
                    </div>

                    <div class="display-maintenance-request">
                        <div id="mr-1" class="maintenance-request-details">
                            <h3>Datetime</h3>
                            <p>01/27/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Pipe needs maintenance.</p>
                            <h3>Status</h3>
                            <p>In-progress</p>
                        </div>

                        <div id="mr-2" class="maintenance-request-details">
                            <h3>Datetime</h3>
                            <p>02/09/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Electric maintenance required.</p>
                            <h3>Status</h3>
                            <p>Completed</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Apartment Owner New Complaints -->

            <div id="new-complaint" class="section-content">
                <div class="section-heading"><h1>Complaints</h1></div>
                <h3>Create New Complaint</h3>

                <div>
                    <form>
                        <label for="maintenance-request-input-message"><h4>Enter details:</h4></label>
                        <textarea id="maintenance-request-input-message" name="maintenance-request-input-message" class="textarea-size" rows="4" cols="50"></textarea><br/>
                        <input type="submit" value="Submit" class="submit-button">
                    </form>
                </div>
            </div>

            <!-- Apartment Owner View Complaints -->

            <div id="view-complaints" class="section-content">
                <div class="section-heading"><h1>View Complaints</h1></div>
                <h3>View Complaints</h3>
                <div>

                    <div class="complaint-list">
                        <button class="complaint" onclick="viewComplaintDetails(event, 'c-1')">
                            Complaint ID: 1 <br />
                            Date: 01/27/2021 <br />
                            Status: In-Progress
                        </button>
                        <button class="complaint" onclick="viewComplaintDetails(event, 'c-2')">
                            Complaint ID: 2 <br />
                            Date: 02/09/2021 <br />
                            Status: Completed
                        </button>
        
                    </div>

                    <div class="display-complaint">
                        <div id="c-1" class="complaint-details">
                            <h3>Datetime</h3>
                            <p>01/27/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Hot water not working.</p>
                            <h3>Status</h3>
                            <p>In-progress</p>
                        </div>

                        <div id="c-2" class="complaint-details">
                            <h3>Datetime</h3>
                            <p>02/09/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Electricity not there.</p>
                            <h3>Status</h3>
                            <p>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Apartment Owner Building Manager Chat -->

            <div id="building-manager-chat" class="section-content">
                <div class="section-heading"><h1>Chat</h1></div>
                <h3>Building Manager</h3>

                <div class="chat-frame">

                    <div class="chat-display-box">

                    </div>

                    <div class="chat-input-bar">
                        <div class="chat-input">
                            <label for="send"></label>
                            <input type="text" id="building-manager-send" name="send" class="chat-input-box" placeholder="Enter Message">
                        </div>
                        <div>
                            <button class="send-button" onclick="inputBuildingManagerChat()">Send</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Apartment Owner Subdivision Manager Chat -->

            <div id="subdivision-manager-chat" class="section-content">
                <div class="section-heading"><h1>Chat</h1></div>
                <h3>Subdivision Manager</h3>

                <div class="chat-frame">

                    <div class="chat-display-box">

                    </div>

                    <div class="chat-input-bar">
                        <div class="chat-input">
                            <label for="send"></label>
                            <input type="text" id="subdivision-manager-send" name="send" class="chat-input-box" placeholder="Enter Message">
                        </div>
                        <div>
                            <button class="send-button" onclick="inputSubdivisionManagerChat()">Send</button>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    </div>

</body>

</html>