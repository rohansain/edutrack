<!-- This page will database and tables structure for student information -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


//connecting database
mysqli_select_db($conn,"roaem_database");


// inserting data into student_info_class1 table
$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1901_22', '16001','AKASH SINGH', 'JAMNA DEVI', 'MOHAN SINGH', 'HOUSE WIFE', 'GUARD', '9664271930', 'singhakash12@gmail.com', 'a-133 Sanjay Colony Tilak Nagar Jaipur', '2017-02-14', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1902_22', '16002','AAYUSH', ' SARITA', ' JAI KRISHAN JAGURI', 'HOUSE WIFE', 'GOVT. EMPLOYEE', '6075289100', 'aayush33@gmail.com', '33 Prabhu Colony Vihan Nagar Jaipur', '2017-01-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1903_22', '16003','ABHISHEK SINGH', 'RAJWINDER KAUR', ' SUKHDEV SINGH', 'TEACHER', 'DEFENCE', '6175489110', 'abhisheksingh@gmail.com', 'A-2 Ram Marg, Aadarsh Nagar Jaipur', '2016-12-04', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1904_22', '16004','AKSHAY MANHAS', ' ANU MANHAS', 'DALJIT MANHAS', 'HOUSE WIFE', 'MOTOR MECHANICAL', '9275289122', 'akshaymanhas56@gmail.com', 'G-7, Shri Ram Path, Nirvan Nagar Jaipur', '2017-04-30', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1905_22', '16005','BHAVESH JOSHI', ' LATA DEVI', ' RAJESH JOSHI', 'HOUSE WIFE', 'ARMY SERVICE', '6375289136', 'joshibhavesh12@gmail.com', 'A-19 Aditi Nivas, Malviya Nagar Jaipur', '2016-12-24', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1906_22', '16006','BHAVYA SAIN', ' RADHA SAIN', ' RAJKUMAR SAIN', 'NURSE', 'GUARD', '7475289140', 'bhavya89@gmail.com', 'V-22 Goner Road Luniyavas Jaipur', '2017-06-08', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1907_22', '16007','CHARCHIT JHA', ' MANJU JHA', ' RAMSHANKAR JHA', 'BUSSINESS WOMEN', 'CLERK', '6575289146', 'jhacharchit983@gmail.com', 'S-56 Ram Gali no.-4 Aastha Nagar Jaipur', '2017-07-09', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1908_22', '16008','DEV GURJAR', ' ASHA GURJAR', ' SHYAM GURJAR', 'warden', 'CIVIL SERVICE', '7675289152', 'devgurjar993@gmail.com', 'D-493 Iskon Valley, Malviya Nagar Jaipur', '2017-09-18', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1909_22', '16009','GAGAN YADAV', ' NEELAM YADAV', ' RABINDRA YADAV', 'HOUSE WIFE', 'NEWSPAPER SELLER', '9664271959', 'yadavgagan39@gmail.com', 'C-22 Gurunanakpura, Rajapark Jaipur', '2017-01-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1910_22', '16010','GARVIT KAUR', ' SUNITA KAUR', 'RAJENDRA KAUR', 'HOUSE WIFE', 'BUSSINESS MAN', '7264271965', 'garvitkaur22@gmail.com', '1/11 Ganesh Colony, Behind Birla Temple Jaipur', '2016-11-10', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1911_22', '16011','LOKESH PALIWAL', ' KANCHAN DEVI', ' GUMAN PALIWAL', 'HOUSE WIFE', 'FARMER', '8694271626', 'lokesh3939@gmail.com', 'C-22 bal vihar, Near The Oberoi Rajvilas Jaipur', '2017-07-26', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1912_22', '16012','MANISH MAHOTA', ' ANITA MAHOTA', ' SUBOSH KUMAR MAHOTA', 'HOUSE WIFE', 'NONE', '6764271972', 'manishmahota0033@gmail.com', 'D-90 Ashok Vatika, Near GT Mall Jaipur', '2017-02-30', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1913_22', '16013','MUKESH BHAKAR', ' PRAMILA BHAWAR', ' KANWAL BHAKAR', 'HOUSE WIFE', 'DRIVER', '8064271760', 'mukeshbhakar329@gmail.com', 'A-98 Kailash Apartment ,Mansarovar Jaipur', '2017-03-29', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1914_22', '16014','NIKHIL SARKAR', 'JAYANTI DEVI', ' RAKESH SARKAR', 'HOUSE WIFE', 'MLA', '9264271930', 'nikhilsarkar@gmail.com', 'U-9 Aashiyana , Near City Park Jaipur', '2017-05-24', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1915_22', '16015','NAMAN SHARMA', ' URMILA SHARMA', ' BHAGAT SHARMA', 'HOUSE WIFE', 'PRINCIPAL', '8864271770', 'namansharma111@gmail.com', '103 Roop Garden, Vijay Path Jaipur', '2017-08-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1916_22', '16016','OM KASHYAP', ' SHAMA KASHYAP', ' MANOJ KASHYA', 'HOUSE WIFE', 'PEON', '9064271820', 'kashyapom948@gmail.com', 'D-12 Van Vihar Haldina Mod Jaipur', '2017-08-20', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1917_22', '16017','RAVI RANA', ' SANJU RANA', ' NANDU RANA', 'HOUSE WIFE', 'PRIVATE JOB', '9264271829', 'ranaravi54@gmail.com', 'D-398 Ghee Walo Ka Rasta Jaipur', '2016-10-18', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1918_22', '16018','RAKSHIT SINHA', ' VIMALA SINHA', ' SUKESH SINHA', 'HOUSE WIFE', 'CONDUCTOR', '7664271846', 'rakshitsinha94@gmail.com', 'C-1453 smrati Path Aadarsh Nagar Jaipur', '2017-01-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1919_22', '16019','YASH DOGRA', ' SUDHA DOGRA', ' RAVINDRA DOGRA', 'HOUSE WIFE', 'WRITER', '7764271856', 'yashdogra58@gmail.com', 'A-2 Arpit Colony vaishali Nagar Jaipur', '2017-04-13', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class1` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1920_22', '16020','YASHRAJ KUMAR', ' SHWETA DEVI', ' MAN KUMAR', 'HOUSE WIFE', 'SCIENTIST', '7664271970', 'yashraj9999@gmail.com', 'A-8 Sanjiv Colony Vidhyadhar Nagar Jaipur', '2017-07-26', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);






// inserting data into student_info_class2 table

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1801_21', '26001', 'ANKIT SINGH', 'RAMA DEVI', 'SHREEKANT SINGH', 'WORKER', 'SALES MANAGER', '7749293942', 'devgitesh420@gmail.com', 'A-39 Amber Road, Badi Choupad Jaipur', '2016-10-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1802_21', '26002', 'AMIT TRIVEDI', 'RUPA TRIVEDI', 'SRI KRISHNA TRIVEDI', 'HOUSE WIFE', 'SENIOR EXECUTIVE', '7749294985', 'amittrivedi65@gmail.com', 'B-33 Johri Bazar, Jaipur', '2016-11-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1803_21', '26003', 'BHAVIN SHEIKH', 'HINA SHEIKH', 'AATIF SHEIKH', 'MANAGER', 'PUBLIC SERVICE MANAGER', '7745940544', 'bhavinsheikh2@gmail.com', 'C-99 Janpath, Lalkothi Jaipur', '2015-12-31', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1804_21', '26004', 'CHETAN MONGIA', 'SANCHITA MONGIA', 'BISWAJIT MONGIA', 'HOUSE WIFE', 'OTHER ADDMINISTRATOR', '7749938846', 'chetanmogia20@gmail.com', '102, The Kedias Villa, Museum Road, Jaipur', '2016-09-26', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1805_21', '26005', 'DHRUV SHAH', 'SUBRASMITA SHAH', 'RAJIB SHAH', 'HOUSE WIFE', 'OWNER', '7778908379', 'dhruvshah23@gmail.com', '12 Miles Tonk road, Jaipur', '2016-06-05', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1806_21', '26006', 'DEVESH TANK', 'SUTAPA TANK', 'SATYABRATA TANK', 'TRADES WOMEN', 'SPECIALIST MANGER', '8440580395', 'deveshtank@gmail.com', '393 Jawahar Lal Nehru Marg, Tilak Nagar, Jaipur', '2016-02-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1807_21', '26007', 'FREDDY', 'SAM', 'ALEX', 'NURSE', 'DEFENCE FORCES', '9667899620', 'freddy38@gmail.com', 'R-66 Prithviraj Road, Rambagh, Jaipur', '2016-06-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1808_21', '26008', 'MONU SAHU', 'RUMA SAHU', 'AMITABH SAHU', 'BUSINESS WOMEN', 'SEA TRANSPORT', '67353899237', 'sahumonu@gmail.com', 'F-3939 Lal Dungri, Jawahar Nagar, Jaipur', '2015-10-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1809_21', '26009', 'MANPRIT SINGH', 'DRAWPADI', 'RANJIT KR. SINGH', 'HOUSE WIFE', 'FINANCIAL SERVICE MANAGER', '9680337909', 'manprit23@gmail.com', 'H-638 Bhawani Singh Road, Jaipur', '2015-10-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1810_21', '26010', 'NAMAN SAIN', ' SUJATA', ' TAPAN SAIN', 'SOCIAL WORKER', 'RETAIL SALES', '9485008937', 'sainnaman303@gmail.com', 'A- 12 Univer Complex, Devisinghpura Jaipur', '2015-11-23', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1811_21', '26011', 'NITESH SEN', ' PAPIYA DEB SEN', ' KESHAB SEN', 'CHILDCARE ASSISTANTS', 'ASSOCIATE PROFESSIONALS', '7893300238', 'nitesh212@gmail.com', 'A-23 Brahampuri, Near Nahargarh Fort Jaipur', '2016-02-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1812_21', '26012', 'OMPRAKASH SAINI', ' SAMRITI SEN', ' JOYDEB SEN', 'HUMAN RESOURCES WORKER', 'TRADESMEN', '9669090333', 'op290239@gmail.com', 'B-29 Jalebi Chowk, Near City Palace Jaipur', '2016-03-26', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1813_21', '26013', 'PANKAJ GOYAL', ' MAYA GOYAL', ' UTTAM GOYAL', 'TEACHER', 'CLERK', '7749293462', 'goyalpratik33@gmail.com', '60 Old Ramgarh Mod, Amber, Jaipur', '2016-04-30', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1814_21', '26014', 'PRATIK KAUR', ' UTTARA KAUR', ' SANJAY KAUR', 'PERSONAL CARE AIDES', 'SALES STAFF', '77894393942', 'kaurpratik23@gmail.com', 'J-90 Shri Galta Peetham, Galva Ashram, Jaipur', '2016-01-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1815_21', '26015', 'RITESH JANGID', ' MAHELI JANGID', ' BHABATOSH JANGID', 'HOUSE WIFE', 'DRIVER', '777893442', 'riteshjangid003@gmail.com', 'K-20 Adarsh Nagar Jaipur', '2016-05-23', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1816_21', '26016', 'RAVI AGARWAL', ' LALTA AGARWAL', ' NITISH AGARWAL', 'HOUSEKEEPING CLEANER', 'HOSPITALITY STAFF', '7745543942', 'ravi3939@gmail.com', 'A-30 Kheri Gate, Amber, Jaipur', '2016-06-22', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1817_21', '26017', 'RAM', ' RINA DEVI', ' SUKDEB KUMAR', 'CASHIER', 'SALES ASSISTANTS', '7889000942', 'ramram29@gmail.com', 'T-20 Bhagwant Das Road, Ashok Nagar, Jaipur', '2015-12-24', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1818_21', '26018', 'TARUN BANGUR', ' AALIYA', ' SANDEEP BANGUR', 'MAID', 'LABOURER', '7749556742', 'bangurtarun39@gmail.com', '182, Moti Doongri Road, Tilak Nagar, Jaipur', '2016-03-26', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1819_21', '26019', 'TANISHQ', ' NEHA DEVI', ' VINAY KUMAR', 'MANAGER', 'HORSE TRAINER', '7749940321', 'tanishq383838@gmail.com', 't-90 Near Badi Chopad Bus Stop, Jaipur', '2016-07-20', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class2` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1820_21', '26020', 'YASH RAJ', ' SHRADHA RAJ', ' HARBHAJAN RAJ', 'ADMINISTRATIVE ASSISTANTS', 'STORE MAN', '9090384759', 'yashraj89@gmail.com', '390, Taj Rambagh Palace Bhawani singh Road, Jaipur', '2016-07-15', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);





// inserting data into student_info_class3 table
$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1701_20', '36001', 'AADHARSH RANA', 'MEENA RANA', 'JAGDISH RANA', 'HOUSE WIFE', 'WAITERS', '9384837483', 'jagdishrana999@gmail.com', 'A-38 Savarkar Marg, Near Shivaji Park, Jaipur', '2015-01-01', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1702_20', '36002', 'ARSHDEEP SINGH', 'ASHNEER KAUR', 'GOGINDER SINGH', 'RECEPTIONIST', 'TEACHING ASSISTANT', '7274837422', 'gogindersingh93@gmail.com', 'U-383 Shubh Nivas, Rajat path, Jaipur', '2015-02-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1703_20', '36003', 'BRAVO', 'KIARA', 'JOHN', 'HOUSE WIFE', 'COOK', '7884837429', 'johnjohn@gmail.com', 'B-209 Aravali valo ka rasta, Kishanpole Bazar Jaipur', '2015-02-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1704_20', '36004', 'CHARCHIT KHANDELWAL', 'LALITA KHANDELWAL', 'RAJENDRA KHANDELWAL', 'CHIEF', 'CHILDCARE ADMINISTRATORS', '9074837433', 'rajendrakhandelwal39@gmail.com', 'A-100 East Block, Near Railway Station, Jaipur', '2015-03-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1705_20', '36005', 'DEVESH MEENA', 'LATA MEENA', 'SURESH MEENA', 'WAITER', 'EDUCATION ADMINISTRATORS', '7874837493', 'sureshmeena02@gmail.com', 'A-222 North Block, Near City Park, Jaipur', '2015-04-17', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1706_20', '36006', 'GARVIT SHARMA', 'NEHA SHARMA', 'RAMESH SHARMA', 'MACHINERY OPERATOR', 'SUPERVISOR', '7874837422', 'rameshsharma33@gmail.com', 'C-292 Bajaj Nagar, Jaipur', '2015-04-28', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1707_20', '36007', 'MUKUL MAAN', 'SNEHA MAAN', 'SURENDRA MAAN', 'SECRETARY', 'RETAIL SALESPERSON', '6774837455', 'surendramaan@gmail.com', 'M-192 Ram Gali no.4 , Rajapark, Jaipur', '2015-05-26', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1708_20', '36008', 'MANPREET SINGH', 'MAHI SINGH', 'SATPAL SINGH', 'INSURANCE AGENT', 'FINANCIAL MANAGER', '9974837484', 'satpalsingh493@gmail.com', '302 Kings Valley, texas, Jaipur', '2015-06-18', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1709_20', '36009', 'NIKHIL SHARMA', 'PREETI SHARMA', 'PULKIT SHARMA', 'ASSESSOR', 'HR WORKER', '8274837482', 'pulkitsharma93@gmail.com', '2929 Shree Ram Apartment, JLN Marg Jaipur', '2015-08-13', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1710_20', '36010', 'NITESH DEGDA', 'NAGMA DEGDA', 'RAMCHANDRA DEGDA', 'CHIEF', 'AUDITING CLERK', '8974837480', 'ramchandradegda20@gmail.com', 'F-20 Behind Zara Showroom, Anandpuri, Jaipur', '2015-10-15', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1711_20', '36011', 'PRAKASH RAO', 'MEENA RAO', 'JAGDISH RAO', 'HOUSE WIFE', 'CAHIERS', '9974837483', 'jagdishrao67@gmail.com', 'E-32 Ramgad mod, amer, Jaipur', '2015-07-05', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1712_20', '36012', 'PREM MEENA', 'SITA DEVI', 'BRHAM KUMAR MEENA', 'HOUSE WIFE', 'ACCOUNTANTS', '8374837483', 'meenabhram23@gmail.com', 'E-39 Near The Affect School, Amer Jaipur', '2015-07-30', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1713_20', '36013', 'RAVI JAIN', 'SANTOSHI JAIN', 'MANISH JAIN', 'WRITER', 'BANK CLERK', '7774837483', 'jainmanish92@gmail.com', '129 Vijay Path, Jaipur', '2015-09-29', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1714_20', '36014', 'ROHITASH JAAT', 'REKHA JAAT', 'AVINASH JAAT', 'DOCTOR', 'BOOK KEEPER', '7874837486', 'jaatavinash88@gmail.com', 'D-2 shipra path, Aacharya Tulsi Circle, Jaipur', '2015-03-10', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1715_20', '36015', 'REHAN JOSHI', 'PINKI JOSHI', 'HANSRAJ JOSHI', 'NURSE', 'PAYROLL CLERK', '9974837483', 'hansrajjoshi810@gmail.com', 'C-88 Bal Vihar Samiti, Luniyawas Jaipur', '2014-11-22', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1716_20', '36016', 'RITESH KALAL', 'MANJU KALAL', 'AMIT KALAL', 'HOUSE WIFE', 'AUCTIONEER', '8974837484', 'amitkalal9999@gmail.com', 'c-90 Radhika Mantion, Near MHS School Jaipur', '2014-12-29', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1717_20', '36017', 'SHAILESH KUMAWAT', 'SUNANDA KUMAWAT', 'DILIP KUMAWAT', 'TEACHER', 'RECEPTIONIST', '6874837486', 'dilipkumawat02@gmail.com', 'B-32 Khamira mod, New Gate, Jaipur', '2015-01-10', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1718_20', '36018', 'SHAILESH VERMA', 'RADHA VERMA', 'VIKAS VERMA', 'TEACHER', 'SHEARER', '9374837482', 'vikasverma00@gmail.com', 'B-39 opp. Mazza Factory, Jaipur', '2015-05-05', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1719_20', '36019', 'YOGENDRA SINGH', 'SNEHA SINGH', 'MIHIR SINGH', 'MAID', 'CARETAKER', '9994837480', 'mihirsingh22@gmail.com', 'A-20 Road no.10 VKI, Jaipur', '2015-06-06', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class3` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1720_20', '36020', 'YUVRAJ CHAHAL', 'ANJALI CHAHAL', 'DEEPAK CHAHAL', 'LAUNDRY', 'TROLLEY COLLECTOR', '8984837481', 'deepak3@gmail.com', 'T-44 Nirvan Nagar, Mansarovar Jaipur', '2015-09-01', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);


// inserting data into student_info_class4 table
$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1601_19', '46001', 'AARAV KUMAR', 'SITA DEVI', 'RAM KUMAR', 'HOUSE WIFE', 'SHOPKEEPER', '9827374638', 'kumarram7654@gmail.com', 'A-20 Near Reymond showroom, Rajapark, Jaipur', '2014-11-30', 'Jaipur', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1602_19', '46002', 'ANKIT KUMAWAT', 'SANTOSH DEVI', 'VIRAT KUMAWAT', 'MAID', 'CARPAINTER', '9827374649', 'kumawatvirat654@gmail.com', 'A-32 Road No. 17,Vishwakarma Industrial Area, Jaipur', '2014-10-01', 'Jaipur', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1603_19', '46003', 'AKSHAY SRIVASTAV', 'AAYESHA SRIVASTAV', 'SHAILESH SRIVASTAV', 'CARETAKER', 'ELECTRICIANS', '9827374634', 'shaileshsrivastav2323@gmail.com', 'B-23 Vatika Jaipur 21, Ajmer Road, Jaipur', '2013-01-30', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1604_19', '46004', 'BHARAT LAL', 'RESHMA', 'BHARTESH LAL', 'HOUSE WIFE', 'PLUMBER', '9827344634', 'bhartesh2323@gmail.com', 'B-44 Manglam Aananda, Mansarovar, Jaipur', '2014-02-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1605_19', '46005', 'BANWARI PANWAR', 'URMILA PANWAR', 'BHEEM PANWAR', 'HOUSE WIFE', 'CLERK', '8887344634', 'bheemoanwar2323@gmail.com', 'B-23 Suncity Jewel of India, JLN Marg, Jaipur', '2014-03-04', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1606_19', '46006', 'BABLU YADAV', 'GEETA DEVI', 'RAMSINGH YADAV', 'COOK', 'CASHIER', '8837344634', 'ramsinghyadav23@gmail.com', 'C-32 Ashiana Rangoli Gardens, Vaishali Nagar, Jaipur', '2014-04-06', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1607_19', '46007', 'CHANDU KHAN', 'AALIYA', 'HUSSAIN KHAN', 'TEACHER', 'RECEPTIONIST', '8837344622', 'hussainkhan32@gmail.com', 'C-95 Near Govt. School, Mansarovar, Jaipur', '2013-10-08', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1608_19', '46008', 'CHITRANSH TRIVEDI', 'BABITA TRIVEDI', 'RAMESH TRIVEDI', 'CHIEF', 'OWNER', '7340171192', 'trivediramesh33@gmail.com', 'D-23 C-Scheme, Sitaram Paradise, Jaipur', '2014-06-09', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1609_19', '46009', 'FARAH KHAN', 'ALFIYA', 'SALEEM KHAN', 'STORE WOMEN', 'FINANCIAL ANALYSTS', '7340178394', 'saleemkhan93@gmail.com', 'D-23 Opp. Center Mall, Barf Khana, Jaipur', '2014-04-10', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1610_19', '46010', 'GOVIND KHANDELWAL', 'RANU KHANDELWAL', 'AMAN KHANDELWAL', 'SOFTWARE DEVELOPER', 'SHOPKEEPER', '7340170055', 'khandelwalaman23@gmail.com', 'E-222, Subhash Chowk, Jaipur', '2014-02-12', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1611_19', '46011', 'GULZAR CHHANNIWALA', 'AANCHAL DEVI', 'ROHIT CHHANNIWALA', 'WAITER', 'MANAGER', '6640170055', 'rohitchanniwala93@gmail.com', 'E-432 Sanga Setu Rd, Ganesh Colony, Jaipur', '2014-02-16', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1612_19', '46012', 'ISHAN BARMAN', 'SRISTI', 'SAPPAN BARMAN', 'RECEPTIONIST', 'CRICKETER', '6774017005', 'sappanbarman2@gmail.com', 'F-23 Station Road, Jaipur', '2014-03-18', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1613_19', '46013', 'MO. JAVED', 'HINA', 'MO. AATIF', 'HOUSE WIFE', 'TEACHER', '6774017345', 'aatif0101@gmail.com', 'G-32 Sansarchandra Road, Jaipur', '2014-04-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1614_19', '46014', 'KAILASH SAINI', 'MANISHA DEVI', 'SURENDRA SAINI', 'TEACHER', 'CONSTRUCTION WORKER', '7904017345', 'surendrasaini910@gmail.com', 'G-344 Ashiana Rangoli Gardens, Jaipur', '2014-05-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1615_19', '46015', 'MOHIT KUSHWAHA', 'SNEHA KUSHWAHA', 'RAMESH KUSHWAHA', 'BUSSINESS WOMEN', 'ACCOUNTANT', '7904015243', 'rameshkushwaha93@gmail.com', 'H-23 Near Moti Sons, Jagatpura, Jaipur', '2014-06-23', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1616_19', '46016', 'MONU RATHORE', 'SNEHLATA RATHORE', 'RITESH RATHORE', 'HOUSE WIFE', 'FARMER', '7904018594', 'rathoreritesh345@gmail.com', 'H-332 Jayanti Nagar Jaipur', '2014-08-25', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1617_19', '46017', 'PRATYUSH RAMAN', 'MIHIKA RAMAN', 'MOHAN RAMAN', 'HOUSE WIFE', 'CHILDCARE WORKER', '7904010573', 'ramanmohan023@gmail.com', 'I-2323 Moti Marg, Malviya Nagar, Jaipur', '2014-07-29', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1618_19', '46018', 'REVTI RAMAN AGARWAL', 'GAYATRI AGARWAL', 'AASHISH AGARWAL', 'BUSINESS WOMEN', 'BUSSINESS MEN', '7904083940', 'aashishagarwal2@gmail.com', 'A-902  Sanga Setu Rd, Ganesh Colony, Sanganer, Jaipur', '2014-09-01', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1619_19', '46019', 'SHAILENDRA CHANCLANI', 'MOHINI CHANCLANI', 'GITESH CHANCHLANI', 'HOUSE WIFE', 'PROFESSOR', '7904060483', 'gitesh9999@gmail.com', 'B-23 Jhalana Doongri, Ajmer Road, Jaipur', '2013-12-27', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class4` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1620_19', '46020', 'ZIHAN KHANNA', 'LAKSHMI DEVI', 'RAM KHANNA', 'HOUSE WIFE', 'DRIVER', '7982360483', 'ram393@gmail.com', 'B-3245 Patodiya Mohhalla , Jaipur', '2013-11-06', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);



// inserting data into student_info_class5 table
$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1501_18', '56001', 'AMIT KHAPRA', 'BINA DEVI', 'KAMLESH KHAPRA', 'COOK', 'WRITER', '9928374657', 'kamlesh23@gmail.com', 'B-53 Anita Colony, Ashok Nagar, Jaipur', '2013-10-24', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1502_18', '56002', 'ANANT BHARDWAJ', 'SITA BHARDWAJ', 'RAMAN BHARDWAJ', 'HOUSE WIFE' , 'MECHANIC', '9928372345', 'raman33@gmail.com', 'B-954 Anand Puri, Badi Chaupar, Jaipur', '2013-02-23', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1503_18', '56003', 'ALOK KOHLI', 'SHANTI KOHLI', 'GANESH KOHLI', 'HOUSE WIFE', 'PRIVATE JOB', '9928958403', 'ganeshkholi23@gmail.com', 'B-54 Arjun Nagar, Jaipur', '2013-01-07', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1504_18', '56004', 'AMAN JHA', 'MADHURI JHA', 'RAMESH JHA', 'MAID', 'DRIVER', '8392023902', 'rameshjha33@gmail.com', 'A-54 Asalpur, Bapu Nagar, Jaipur', '2013-09-06', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1505_18', '56005', 'CHETAN RAO', 'MADHURI', 'MOOL CHAND RAO', 'HOUSE WIFE', 'SHOPKEEPER', '8392028877', 'moolchadrao6543@gmail.com', 'B-53 Achrol, Bassi Jaipur', '2013-03-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1506_18', '56006', 'DEVESH CHATURVEDI', 'MANJEET CHATURVEDI', 'LAL CHAND CHATURVEDI', 'HOUSE WIFE', 'GUARD', '7892028877', 'lalchand0393@gmail.com', 'A-45 Asalpur, Bhan Nagar, Jaipur', '2013-07-07', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1507_18', '56007', 'DINESH MEENA', 'SUMAN MEENA', 'RAMPAL MEENA', 'COOK', 'SCIENTIST', '7772028877', 'rampalmeena332@gmail.com', 'C-654 Ambabari , Bani Park, Jaipur', '2013-05-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1508_18', '56008', 'DAMODAR SHARMA', 'KRISHNA SHARMA', 'NARENDER SHARMA', 'CARETAKER', 'PHARMASIST', '7032028877', 'narendrasharma23@gmail.com', 'A-30 Amrapali Circle, Bhan Nagar, Jaipur', '2013-04-04', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1509_18', '56009', 'HEMANT SARKAR', 'NIRMALA SARKAR', 'ANIL SARKAR', 'HOUSE WIFE', 'PANDIT', '7032029009', 'anilsarkar23@gmail.com', 'A-12 Barka Nagar, Chaksu, Jaipur', '2013-03-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class5` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1510_18', '56010', 'HARDIK PANDYA', 'SAVITA3 PANDYA', 'UMA PANDYA', 'HOUSE WIFE', 'AGRICULTURE INSPECTOR', '9928374222', 'umapandya232@gmail.com', 'A-44 Civil Lines, Near Girls P.G. School ,Jaipur', '2013-02-04', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);


// inserting data into student_info_class6 table
$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1401_17', '66001', 'ABHISHEK SHOKEEN', 'SANJOGEETA', 'MUKESH SHARMA', 'HOUSE WIFE', 'POLICE', '9887273847', 'mukesh3@gmail.com', 'A-10 Bisht Apartment, Joshi Nagar, Jaipur', '2012-02-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1402_17', '66002', 'BIJENDRA JOSHI', 'INDU JOSHI', 'BALRAJ JOSHI', 'COOK', 'AGARBATTI MAKING', '9893411112', 'balraj23@gmail.com', 'a-12, Mahesh Path, Bijwar, Jaipur', '2012-08-16', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1403_17', '66003', 'CHANDAN SAIN', 'KRISHNA SAIN', 'BIJENDER SAIN', 'MAID', 'AUTOMOBILE WORK', '9087222022', 'bijender233@gmail.com', 'B-43,  Akhil Apartment, Rajapark, Jaipur', '2012-09-15', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1404_17', '66004', 'PREM SINGH', 'BANO', 'KHUSESHWAR SINGH', 'HOUSE WIFE', 'BAKERY WORK', '8102893894', 'khuseshwarsingh23@gmail.com', 'B-22 Ram Prajapati Marg, Jaipur', '2012-02-14', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1405_17', '66005', 'PANKAJ YADAV', 'SHAKUNTLA YADAV', 'RAJPAL YADAV', 'HOUSE WIFE', 'BOOK BINDING', '9427483928', 'shakuntlaradav23@gmail.com', 'C-53 Saraswati Path, Mansarovar, Jaipur', '2012-04-13', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1406_17', '66006', 'ROHIT SHETTY', 'LAXMI SHETTY', 'RAMVEER SHETTY', 'HOUSE WIFE', 'SPORTS SHOWROOM', '8907896548', 'laxmishetty23@gmail.com', 'C-66, Triveni Nagar, Sanganer, Jaipur', '2012-01-12', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1407_17', '66007', 'RAJESH BHAKAR', 'POONAM BHAKAR', 'AJIT BHAKAR', 'HOUSE WIFE', 'DATA ENTRY OPERATION', '8563265665', 'poonambhakar43@gmail.com', 'D-33 Near SDMH Hospital, JLN Marg, Jaipur', '2012-01-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1408_17', '66008', 'SHAILENDRA JOSHI', 'NEERAJ JOSHI', 'SUDHIR JOSHI', 'TEACHER', 'BUSINESS OWNER', '6985302248', 'neerajjoshi34@gmail.com', 'D-423 The Moksh Apartment, The Affect School, Jaipur', '2012-07-12', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1409_17', '66009', 'SHAILESH', 'BABLI', 'BALJEET', 'HOUSE WIFE', 'SPECIALIST', '8987989799', 'baljeet543@gmail.com', 'E-434 Ridhi Sidhi Choraha, Gurjar Ki Thadi, Jaipur', '2012-06-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class6` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1410_17', '66010', 'YASH TAK', 'KAMLA', 'RAMESH TAK', 'HOUSE WIFE', 'DEFENCE FORCES', '8563241479', 'ramesh43@gmail.com', 'd-23 Sharma Complex, Gopalpura Bypass, Jaipur', '2012-07-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);


// inserting data into student_info_class7 table
$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1301_16', '76001', 'ANISH JAIN', 'YASODA JAIN', 'RAMVEER JAIN', 'MAID', 'WAITER', '8874829475', 'ramveerjain89@gmail.com', 'H NO 12-389 Reddy Colony, Jaipur', '2011-01-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1302_16', '76002', 'ASHU KUMAR', 'SHAKUNTLA DEVI', 'AJIT KUMAR', 'TRADES WOMEN', 'FIGHTER', '8987946549', 'ajitkumar98934@gmail.com', 'M/S MARUTHI & SONS Near Bus Stand, Jaipur', '2010-11-06', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1303_16', '76003', 'BABAR AZAM', 'NISHA AZAM', 'AURANGJEB AZAM', 'HOUSE WIFE', 'DEFENCE', '9658742135', 'azamazam9090@gmail.com', 'C/O VASAVI SHOPPING CENTRE GANGA REDDY ROAD MANCHERIAL, Jaipur', '2011-02-01', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1304_16', '76004', 'CHANDRAKANT SHARMA', 'GAJNA SHARMA', 'RAMESH SHARMA', 'HOUSE WIFE', 'PROFESSOR', '8569325874', 'rameshsharma23@gmail.com', 'H 46 550 ANANDNAGAR GHB FLATS NEW VADAJ, Jaipur', '2011-03-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1305_16', '76005', 'DEVENDRA SAIN', 'LAXMI SAIN', 'BARE SAIN', 'HOUSE WIFE', 'BANK CLERK', '6589658352', 'barekhan323@gmail.com', 'H NO 12-338 OPP RDO OFFICE MANCHERIAL, Jaipur', '2011-10-15', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);
  
$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1306_16', '76006', 'DHEERAJ SAIN', 'POONAM SAIN', 'SANTOSH SAIN', 'TEACHER', 'TEACHER', '9060602513', 'santoshsain23@gmail.com', 'H NO 8-459 MAIN ROAD MANCHERIAL POST, Jaipur', '2011-09-20', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1307_16', '76007', 'FIROZ KHAN', 'ANOFA', 'AMEEN KHAN', 'TEACHER', 'SHOPKEEPAR', '8032541796', 'khanameen399@gmail.com', 'QR NO SPL A - 2 A ZONE, Jaipur', '2011-08-17', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1308_16', '76008', 'GAGAN SINHA', 'BABLI SINHA', 'RAVINDER SINHA', 'HOUSE WIFE', 'ARMY', '7032156856', 'ravindra878@gmail.com', '86 DURGA NAGAR FIROZABAD Road, Jaipur', '2011-07-19', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1309_16', '76009', 'HEMANT SAINI', 'KAMLA SAINI', 'DEVENDER SAINI', 'COOK', 'CHIEF', '9506568522', 'devender32@gmail.com', '17/14 CHILLINT KIGHATIA AGRA Road, Jaipur', '2011-06-22', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class7` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1310_16', '76010', 'JASWANT KAUR', 'URMILA KAUR', 'BALJEET KAUR', 'HOUSE WIFE', 'BUSSINESS MEN', '8946516000', 'baljeetkaur23@gmail.com', '31/105 LOHAR GALI AGRA AGRA Road, Jaipur', '2011-04-29', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);


// inserting data into student_info_class8 table
$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1201_15', '86001', 'AKSHAT SHARMA', 'SUBADHRA SHARMA', 'DAMODAR SHARMA', 'TEACHER', 'DOCTOR', '9938475738', 'damodarsharma3@gmail.com', ' 37/222 NAGLA BHOORI SINGH BUNDUKATRA, Jaipur', '2010-05-03', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1202_15', '86002', 'ARMAAN SHAN', 'AAROHI SHAN', 'CHAANAKYA SHAN', 'COOK', 'HEALTH ADMINISTRATOR', '9865165485', 'chaanakyashah23@gmail.com', 'C/O SUBHASH CHANDRA C2, GOPAL NAGAR, Jaipur', '2010-05-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1203_15', '86003', 'AYYAN PAL', 'ABHILASHA PAL', 'BRAHMADUTT PAL', 'CARETAKER', 'POLICE', '8569231470', 'brahmaduttpal33@gmail.com', '4-SHANKER COLONY, TEHSIL ROAD AGRA-10, Jaipur', '2010-05-04', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1204_15', '86004', 'BARNAV RAJE', 'ANUPAMA DEVI', 'CHARAN RAJE', 'CHILDCARE', 'REGIONAL DIRECTOR', '9630258741', 'charan9999@gmail.com', 'B-16/17 PRATAP NAGAR, Jaipur', '2010-05-07', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1205_15', '86005', 'CHIRAYU RAI', 'ASMITA RAI', 'ABHIJIT RAI', 'HOUSE WIFE', 'HEALTH ADMINISTRATOR', '9664447851', 'abhijitrai939@gmail.com', '59 AYODHYA KUNJ A JAGNER ROAD, Jaipur', '2010-01-08', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1206_15', '86006', 'CHITRANSH NATH', 'VIMALA NATH', 'AAYUSHMAAN NATH', 'LOAN OFFICER', 'FLYING INSTRUCTOR', '8556974520', 'aayushmaan233@gmail.com', '6/10 MALVIYA KUNJ, LOHA MANDI, Jaipur', '2010-07-08', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1207_15', '86007', 'CHIRAG GOEL', 'SARLA GOEL', 'ABHAY GOEL', 'HOUSE WIFE', 'BUSINESS', '6895423842', 'abhaygoel@gmail.com', '22/23 OLD VIJAY NAGAR COLONY, Jaipur', '2010-07-12', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1208_15', '86008', 'DAKSH BHATT', 'SUNITA DEVI', 'AADIDEV BHATT', 'TRADES WOMEN', 'JOURNALIST', '6985324712', 'aadidevbhatt23@gmail.com', 'S W 65 SOAMI BAGH, Jaipur', '2010-07-23', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1209_15', '86009', 'DANISH KAPOOR', 'SANGITA KAPOOR', 'AADHISHANKAR KAPOOR ', 'HOUSE WIFE', 'AUTHOR', '7854962133', 'aadhishankarkapoor33@gmail.com', '20/4 1ST FLOOR MARUTI TOWERS, SANJAY PLACE, Jaipur', '2010-10-10', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class8` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1210_15', '86010', 'DARPAN MADAAN', 'SANJU MADAAN', 'ARJUN MADAAN', 'TEACHER', 'DESIGNER', '9667778025', 'arjunmadaan091@gmail.com', ' C/O.R.K.PATEL 6A KANAK SOCIETY, VED MANDIR ROAD, Jaipur', '2010-10-14', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);


// inserting data into student_info_class9 table
$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1101_14', '96001', 'ALOK SWAMI', 'GEETA SWAMI', 'NANDAN SWAMI', 'HOUSE WIFE', 'CEO', '6987596585', 'nandanswami23@gmail.com', '50 HAPPYHOME SHOPPING CENTRE SHASTRI NAGAR NARANPURA, JAIPUR', '2009-09-30', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1102_14', '96002', 'ATUL DUTTA', 'PUSHPA DUTTA', 'SURENDER DUTTA', 'COMMISSION OFFICER', 'PROFESSOR', '6965485545', 'surendradutta23@gmail.com', '1035 MAHALAXMI SOCIETY RAMNAGAR SABARMATI, JAIPUR', '2009-02-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1103_14', '96003', 'BHUPESH MAHAJAN', 'LALTA MAHAJAN', 'LOKESH MAHAJAN', 'PILOT', 'SUPERVISOR', '9685600052', 'lokeshmahajan3@gmail.com', 'C/O SHARAD R SHAH H-4 PANCHWATI SOC. UMARA JAKAT NAKA, JAIPUR', '2009-03-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1104_14', '96004', 'BHUSHAN VEENA', 'VEERVATI DEVI', 'VINOD VEENA', 'FLIGHT OFFICER', 'MANAGER', '8865621321', 'vinodveenaw4@gmail.com', '51 JANTA SOCAITIY STREET NO 8 OPP L I C TAGOR MARG, JAIPUR', '2009-04-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1105_14', '96005', 'CHETAN PUNJ', 'RAJNI PUNJ', 'MUKESH PUNJ', 'TRAINER', 'TRADES ASSISTANT', '9635451215', 'mukeshpunj@gmail.com', 'NO.1SHAKTINAGAR SOCIETY B/H VISHAL HOTEL, JAIPUR', '2009-05-11', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1106_14', '96006', 'CHITRANSH NAGPAL', 'MAYA NAGPAL', 'SURESH NAGPAL', 'HOUSE WIFE', 'HORSE TRAINER', '6656565699', 'sureshnagpal43@gmail.com', 'B-3/6 MONA APT. MEMNAGAR, JAIPUR', '2009-05-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1107_14', '96007', 'DEEPAK SAXENA', 'ANOFA SAXENA', 'MUNNA SAXENA', 'HOUSE WIFE', 'NURSERY MAN', '6354764523', 'munnasaxena4323@gmail.com', 'B/10 RAJESHWAR FLATS MIRAMBICA ROAD, JAIPUR', '2009-06-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1108_14', '96008', 'DEEPANSHU JOSHI', 'RASHAMA JOSHI', 'KAMALJEET JOSHI', 'LDC', 'GARDENER', '9658421356', 'kamaljeetjoshi43@gmail.com', ' 1601 BHAVSARS KHANCHO SARASPUR, JAIPUR', '2009-07-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1109_14', '96009', 'ELVISH DHAWAN', 'SUMAN DHAWAN', 'NARESH DHAWAN', 'AGRICULTURE', 'TEACHER', '8965236589', 'nareshdhawan9078@gmail.com', ' B/1002 RIDDHI COMPLEX, JAIPUR', '2009-08-21', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class9` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1110_14', '96010', 'GOPESH KUMAR', 'PRAMILA KUMAR', 'RAJBIR KUMAR', 'HOUSE WIFE', 'TEACHER', '7854666554', 'rajbirkumar4@gmail.com', '3 CHAMPANI VAS NR VARSODA CHALL, JAIPUR', '2009-08-28', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);


// inserting data into student_info_class10 table
$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1001_13', '106001', 'ANWAR SHARMA', 'NAINA SHARMA', 'RAM DHAN SHARMA', 'HOUSE WIFE', 'CASHIER', '9826374658', 'ramdhansharma34@gmail.com', 'C/O JAGAT 9 TRUPTI SOCY NEAR BHATTHA PALDI, JAIPUR', '2008-12-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1002_13', '106002', 'ANUP SETHI', 'RENU SETHI', 'ANIL SETHI', 'FARMING', 'DENTAL ASSISTANT', '9826385030', 'anilsethi23@gmail.com', 'B-5/302 MULTISTOREY ONGC COLONY CHANDKHEDA, JAIPUR', '2008-01-02', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1003_13', '106003', 'BALWANT SEN', 'KANAK SEN', 'SHAMSHER SEN', 'BANK BRANCH MANAGER', 'SHOPKEEPAR', '9826383343', 'shamshersen949@gmail.com', 'A/273 KOCHRAB METOVAS NEAR ROMJI MANDIR, JAIPUR', '2008-02-12', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1004_13', '106004', 'DEVANG SAXENA', 'INDRA SAXENA', 'YOGENDRA SAXENA', 'MUSICIAN', 'SUPPORT MANAGER', '9826332434', 'yogendrasaxena43@gmail.com', 'C-46 RBI STAFF COLONY NR GANDHI ASHRAM SUBHAS BRIDGE, JAIPUR', '2008-02-22', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1005_13', '106005', 'GAJRAJ KISHORE', 'MOTI KISHORE', 'SANJEEV KISHORE', 'PAINTER', 'FINANCIAL BROKER', '7896332434', 'sanjeevkishore43@gmail.com', '7 SHAH COMPLEX C/O R S SHAH NR.GANCHI NI POLE MANEK CHOWK, JAIPUR', '2008-03-25', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1006_13', '106006', 'GYAN SAHNI', 'SUMAN SAHNI', 'KULDEEP SAHNI', 'TEACHER', 'PRINCIPLE', '7893423234', 'kuldeepsahni5432@gmail.com', 'C/O KISHORE FABRICS 5HA MARKET KAPASIYA BAZAR KALUPUR, JAIPUR', '2008-03-29', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1007_13', '106007', 'HARISH SAINI', 'ANITA SAINI', 'SANJEEV SAINI', 'HOUSE WIFE', 'REAL ESTATE AGENT', '6542086486', 'sanjeevsaini43@gmail.com', 'A/20 ISHWAR NAGAR SOCIETY VATVA ROAD MANI NAGAR, JAIPUR', '2008-05-26', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1008_13', '106008', 'HARIOM MALIK', 'KIRAN MALIK', 'SUBHASH MALIK', 'HOUSE WIFE', 'ADMINISTRATOR', '6989898343', 'subhashmalik43@gmail.com', 'E-8 AYOJAN NAGAR NR NAVA SHARDA MANDIR PALDI, JAIPUR', '2008-05-16', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1009_13', '106009', 'JAYESH RANA', 'MAMTA RANA', 'JAIPAL RANA', 'CHILD CARE', 'LAWYER', '6989887537', 'jaipalrana43@gmail.com', 'C/O GOUTAM CHAND JAIN RANGWALA MARKET, JAIPUR', '2008-06-10', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

$sql ="INSERT INTO `student_info_class10` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('1010_13', '106010', 'KARAN MEHTA', 'JAYANTI MEHTA', 'BHAGWAN MEHTA', 'HOUSE WIFE', 'BUSINESS MEN', '8104934325', 'bhagwanmehta4434@gmail.com', '13 SABARBAG SOCIETY RAMNAGAR, JAIPUR', '2008-07-10', 'JAIPUR', 'RAJASTHAN');";
mysqli_query($conn, $sql);

?>