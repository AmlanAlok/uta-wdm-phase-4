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

    <script src="subdivision-manager-page.js"></script>

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
                
                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'master-record-menu')">Master Record<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="master-record-menu" class="master-record-menu">
                    <a href="#building-manager-details"><button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'building-manager-details')">Building Manager Details</button></a>
                    <a href="#apartment-details"><button class="sidebar-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'apartment-details')">Apartment Owners Details</button></a>
                </div>

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'building-report-menu')">Reports<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                <div id="building-report-menu" class="building-report-menu">
                    <a href="#utility-bill-report"><button class="sidebar-option text-left opacity" onclick="myFunction(event, 'utility-bill-report')">Utility Bill Report</button></a>
                    <a href="#community-service-bill-report"><button class="sidebar-option text-left opacity" onclick="myFunction(event, 'community-service-bill-report')">Community Service Bill Report</button></a>
                </div>

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'subdivision-manager-chat-menu')">Chat<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                    <div id="subdivision-manager-chat-menu" class="subdivision-manager-chat-menu">
                        <a href="#apartment-owner-chat"><button class="subdivision-manager-chat-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'apartment-owner-chat')">Apartment Owner</button></a>
                        <a href="#building-manager-chat"><button class="subdivision-manager-chat-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'building-manager-chat')">Building Manager</button></a>
                    </div> 

                <button class="sidebar-menu-option text-left opacity" onclick="openMenu(event, 'subdivision-it-request-menu')">IT Requests<div class="dropdown-icon"><i class="fas fa-caret-down"></i></div></button>
                    <div id="subdivision-it-request-menu" class="subdivision-it-request-menu">
                        <button class="subdivision-it-request-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'new-it-request')">New IT Request</button>
                        <button class="subdivision-it-request-menu-option sidebar-option text-left opacity" onclick="myFunction(event, 'view-it-requests')">View IT Requests</button>
                    </div>

                <a href="../../">
                    <button class="admin-option text-left opacity" onclick="myFunction(event, 'sign-out')">Sign out</button>
                </a>

            </div>
        </div>


        <div class="main-content">

            <div class="page-heading">
                <h1>Subdivision Manager</h1>
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
            

            <!-- Subdivision Manager Apartment Owner Chat -->

            <div id="apartment-owner-chat" class="section-content">
                <div class="section-heading"><h1>Chat</h1></div>
                
                <div class="chat-with-list">

                    <div class="chat-list">
                        
                        <div>
                            <h3>Apartment Owners</h3>
                        </div>
                        
                        <div class="chat-name-list">
                            <a href="#apartment-owner-1">
                                <button class="apartment-owner-chat-tile" onclick="viewApartmentOwnerChatMenu(event, 'apartment-owner-1')">
                                    Amlan <br />
                                    Apartment Number: 101 <br />
                                </button>
                            </a>
                            <a href="#apartment-owner-2">
                                <button class="apartment-owner-chat-tile" onclick="viewApartmentOwnerChatMenu(event, 'apartment-owner-2')">
                                    Kishore <br />
                                    Apartment Number: 102 <br />
                                </button>
                            </a>
                            <a href="#apartment-owner-3">
                                <button class="apartment-owner-chat-tile" onclick="viewApartmentOwnerChatMenu(event, 'apartment-owner-3')">
                                    Rakshita <br />
                                    Apartment Number: 103 <br />
                                </button>
                            </a>
                            <a href="#apartment-owner-4">
                                <button class="apartment-owner-chat-tile" onclick="viewApartmentOwnerChatMenu(event, 'apartment-owner-4')">
                                    Alok <br />
                                    Apartment Number: 104 <br />
                                </button>
                            </a>
                        </div>
                        
                    </div>

                    <div class="small-chat-frame">

                        <div class="chat-name-display">
                            <div id="apartment-owner-1" class="display-chat-name">
                                <h3>Apartment Number: 101, Amlan</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputApartmentOwnerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div id="apartment-owner-2" class="display-chat-name">
                                <h3>Apartment Number: 102, Kishore</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputApartmentOwnerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div id="apartment-owner-3" class="display-chat-name">
                                <h3>Apartment Number: 103, Rakshita</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputApartmentOwnerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div id="apartment-owner-4" class="display-chat-name">
                                <h3>Apartment Number: 104, Alok</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputApartmentOwnerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>

                </div>
            </div>

            <!-- Subdivision Manager Building Manager Chat -->

            <div id="building-manager-chat" class="section-content">
                <div class="section-heading"><h1>Chat</h1></div>
                
                <div class="chat-with-list">

                    <div class="chat-list">
                        
                        <div>
                            <h3>Building Manager</h3>
                        </div>
                        
                        <div class="chat-name-list">
                            <a href="#building-manager-1">
                                <button class="building-manager-chat-tile" onclick="viewBuildingManagerChatMenu(event, 'building-manager-1')">
                                    Amlan <br />
                                    Building Name: Sapphire <br />
                                </button>
                            </a>
                            <a href="#building-manager-2">
                                <button class="building-manager-chat-tile" onclick="viewBuildingManagerChatMenu(event, 'building-manager-2')">
                                    Kishore <br />
                                    Building Name: Ruby <br />
                                </button>
                            </a>
                            <a href="#building-manager-3">
                                <button class="building-manager-chat-tile" onclick="viewBuildingManagerChatMenu(event, 'building-manager-3')">
                                    Rakshita <br />
                                    Building Name: Emerald <br />
                                </button>
                            </a>
                            <a href="#building-manager-4">
                                <button class="building-manager-chat-tile" onclick="viewBuildingManagerChatMenu(event, 'building-manager-4')">
                                    Alok <br />
                                    Building Name: Diamond <br />
                                </button>
                            </a>
                        </div>
                        
                    </div>

                    <div class="small-chat-frame">

                        <div class="chat-name-display">
                            <div id="building-manager-1" class="display-chat-name">
                                <h3>Building Name: Sapphire, Amlan</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputBuildingManagerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div id="building-manager-2" class="display-chat-name">
                                <h3>Building Name: Ruby, Kishore</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputBuildingManagerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div id="building-manager-3" class="display-chat-name">
                                <h3>Building Name: Emerald, Rakshita</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputBuildingManagerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div id="building-manager-4" class="display-chat-name">
                                <h3>Building Name: Diamond, Alok</h3>
                                <div class="small-chat-display-box">
    
                                </div>
            
                                <div class="chat-input-bar">
                                    <div class="chat-input">
                                        <label for="send"></label>
                                        <input type="text" id="apartment-owner-send" name="send" class="chat-input-box" placeholder="Enter Message">
                                    </div>
                                    <div>
                                        <button class="send-button" onclick="inputBuildingManagerChat()">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>

                </div>
            </div>

            <!-- Subdivision Manager New IT Requests -->

            <div id="new-it-request" class="section-content">
                <div class="section-heading"><h1>IT Request</h1></div>
                <h3>Create New IT Request</h3>

                <div>
                    <form>
                        <label for="it-request-input-message"><h4>Enter details:</h4></label>
                        <textarea id="it-request-input-message" name="it-request-input-message" class="textarea-size"rows="4" cols="50"></textarea><br/>
                        <input type="submit" value="Submit" class="submit-button">
                    </form>
                </div>
            </div> 
            
            <!-- Subdivision Manager View IT Requests -->

            <div id="view-it-requests" class="section-content">
                <div class="section-heading"><h1>IT Request</h1></div>
                <h3>View IT Request</h3>
                <div>

                    <div class="it-request-list">
                        <button class="it-request" onclick="viewItDetails(event, 'it-1')">
                            IT Request ID: 1 <br />
                            Date: 01/27/2021 <br />
                            Status: In-Progress
                        </button>
                        <button class="it-request" onclick="viewItDetails(event, 'it-2')">
                            IT Request ID: 2 <br />
                            Date: 02/09/2021 <br />
                            Status: Completed
                        </button>
                    </div>

                    <div class="display-it-request">
                        <div id="it-1" class="it-request-details">
                            <h3>Datetime</h3>
                            <p>01/27/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Something not working.</p>
                            <h3>Status</h3>
                            <p>In-progress</p>
                        </div>

                        <div id="it-2" class="it-request-details">
                            <h3>Datetime</h3>
                            <p>02/09/2021 04:05:06</p>
                            <h3>Message</h3>
                            <p>Need access to something.</p>
                            <h3>Status</h3>
                            <p>Completed</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Subdivision Manager Apartment Details -->

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

            <!-- Subdivision Manager Building Manager Details -->

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

            <!-- Subdivision Manager Utility Bill -->

            <div id="utility-bill-report" class="section-content">
                <div class="section-heading"><h1>Community Service Bill Report</h1></div>

                <div><h2>Month-Year: February-2021</h2></div>

                <div class="subdivision-manager-bill-table-position total-bill">
                    <div class="apartment-owner-bill-table">
                        <table>
                            <tr><th>Building Name</th><th>Apartment Number</th><th>Electricity</th><th>Water</th><th>Gas</th><th>Apartment Total</th></tr>
                            <tr><td>Emerald</td><td>101</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Emerald</td><td>102</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Emerald</td><td>103</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Emerald</td><td>104</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Ruby</td><td>101</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Ruby</td><td>102</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Diamond</td><td>101</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Sapphire</td><td>101</td><td>$100.00</td><td>$10.00</td><td>$20.00</td><td>$130.00</td></tr>
                            <tr><td>Building Total</td><td>8</td><td>$800.00</td><td>$80.00</td><td>$160.00</td><td>$1040.00</td></tr>
                        </table>
                    </div>    
                </div>
            </div>

            <!-- Subdivision Manager community Service Bill -->

            <div id="community-service-bill-report" class="section-content">
                <div class="section-heading"><h1>Community Service Bill Report</h1></div>

                <div><h2>Month-Year: February-2021</h2></div>

                <div class="subdivision-manager-bill-table-position total-bill">
                    <div class="apartment-owner-bill-table">
                        <table>
                            <tr><th>Building Name</th><th>Apartment Number</th><th>Maintenance Fee</th><th>Apartment Total</th></tr>
                            <tr><td>Emerald</td><td>101</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Emerald</td><td>102</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Emerald</td><td>103</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Emerald</td><td>104</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Ruby</td><td>101</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Ruby</td><td>101</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Diamond</td><td>101</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Sapphire</td><td>101</td><td>$100.00</td><td>$100.00</td></tr>
                            <tr><td>Building Total</td><td>8</td><td>$400.00</td><td>$400.00</td></tr>
                        </table>
                    </div>    
                </div>
            </div>


        </div>

    </div>

</body>

</html>