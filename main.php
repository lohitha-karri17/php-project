<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body{
            margin: 0 ;
            padding: 0;
            font-family: 'Poppins';     
        }
        .top{
            height: 8vh;
            position: relative;
            /* width: 100%; */
            background-color: rgb(255, 255, 255);
            box-shadow: 10px 0px 15px rgb(158, 158, 158);
        }
         /* .search{
            height: 4vh;
            width: 660px;
            margin-left: 150px;
           
            background-color: rgb(255, 255, 255);
            float:left;
            color: grey;
            border-radius: 20px;
            box-shadow:0px 0px 5px rgb(158, 158, 158) ;
        }  */
        .search {
            /* padding-top:10px; */
            /* margin-top: 100px; */
            margin:10px;
            float:left;
            margin-left:200px;
            /* margin-left: 500px; */
            height:4vh;
            width:500px;
            background-color:rgb(255, 255, 255);
            border-radius: 20px;
            color:grey;
            box-shadow:0px 0px 10px rgb(158, 158, 158) ;

        }
        .bottom{
            height: 92vh;
            /* background-color: rgb(165, 172, 172); */
        }
        .left{
            width: 20%;
            height: 100%;
            float: left;
            position: relative;
            background-color: rgb(254, 249, 249);
            box-shadow: 0px 10px 15px rgb(158, 158, 158);
        }
        .right{
            width: 80%;
            float: left;
            height: 100%;
            background-color: rgb(248, 248, 239);
        }
        .r1{
             width:70%;
             float: left;
             height: 100%;
             background-color: rgb(250, 255, 255);
             overflow-y: scroll;
                scrollbar-width: thin;
                scrollbar-color: transparent transparent;
        }
        #r1::-webkit-scrollbar-thumb {
        background-color: transparent;
        }
        #r1::-webkit-scrollbar-track {
        background-color: transparent;
        }

        .r2{
                width: 30%;
                height: 100%;
                float: left;
                background-color: rgb(194, 245, 227);
                border-radius: 10px;
                overflow-y: scroll;
                scrollbar-width: thin;
                scrollbar-color: transparent transparent;
        }
        #r2::-webkit-scrollbar-thumb {
        background-color: transparent;
        }
        #r2::-webkit-scrollbar-track {
        background-color: transparent;
        }

        .leftl{
            list-style: none;
        }
        .leftl li{
            text-align: center;
            margin: 20px;
            padding: 10px;
            display: block;
            margin-left: 0px;
            /* float: left; */
            height: 8px;width: 180px;
            background-color:  rgb(236, 191, 65);
            border-radius: 25px;
        }
        li a:hover{
            color: rgb(255, 255, 255);
            background-color:rgb(236, 191, 65,0.2) ;
        }
        #post{
            height: 440px;
            width: 550px;
            overflow: hidden;
            border-radius:10px;
            border: 1px solid rgb(253, 253, 253);
            box-shadow:  0px 5px 15px rgb(158, 158, 158);
        }
        .p1{
            height: 20%;
            border-radius: 0px;
            width: 100%;
            background-color: rgb(255, 255, 255);
        }
        .p1 img{
            margin: 20px;
            float: left;
        }
        #uname{
            float: left;
            margin: 30px;
            margin-left: 0px;
        }
        #follow{
            text-align: center;
            color: skyblue;
            border-radius: 20px;
            height: 25px;width: 70px;
            background-color: rgb(255, 255, 255);
            float: right;margin-right: 40px;
            margin: 30px;
            border: 1px solid skyblue;
        }
        .p2{
            height: 10%;
            width: 100%;
            display: flex;
            background-color: rgb(255, 255, 255);
        }
        .p3{
            height: 60%;
            width: 100%;
            background-color: rgb(255, 255, 255);
        }
        .p3 img{
            /* margin:0 auto; */
            margin-left: 40px;
        }
        .p4{
            height: 10%;
            width: 100%;
            background-color: rgb(255, 255, 255);
        }
        #like{
            float: left;
            margin: 13px;
        }
        #cmnt{
            float: left;
            margin: 10px;
        }
        #like1,#cmnt1{
            float: left;
        }
        #new{
            /* text-align: center; */
            height: 240px;
            width: 310px;
            border: 1px solid rgb(255, 255, 255);
            border-radius: 20px;
            box-shadow: 5px 0px 15px rgb(172, 172, 172);
            background-color:white;

        }
        .comment-icon {
    cursor: pointer;
}

.popup-container {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.popup-content {
    position: relative;
}

.close-btn {
    position: absolute;
    top: 5px;
    right: 10px;
    cursor: pointer;
    font-size: 20px;
}

textarea {
    width: 100%;
    height: 80px;
    resize: none;
    margin-bottom: 10px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div class="top">
        <img   style="float:left;" src="images/title.jpg" height="40px" >
        <img   style ="float:left; margin:10px; padding-left: 90px;" src="images/info.jpg" height="25px">
        <p class="search">
            <img src="images/search.jpg" height="20px">
        </p>
        <img src="images/comment.jpg" height="35px" width="40px" style=" margin-left:200px; margin-top: 10px;">
        <img src="images/profile.jpg" height="40px" width="40px" style="margin-left:150px; margin-top: 10px;">
    </div>
    <div class="bottom">
        <div class="left">
             <ul class="leftl">
                <li><a>Home</a></li>
                <li>Academics</li>
                <li>Clubs </li>
                <li>Organizations</li>
                <li>Events</li>
                <li>Discussions</li>
                <li>Resources</li>
                <li>Social & Networking</li>
                <li>Sports</li>
                <li>Transport</li>
                <li>Alumni</li>
                <li>Innovation</li>
                

            </ul> 
        </div>
        <div class="right">
            <div class="r1">
                <div class="rb">
                    <br>
                    <table style="margin: 0 auto;">
                        <tr>
                            <td id="post">
                                <div class="p1">
                                    <img src="images/profile.jpg" width="50px" height="50px">
                                    <p id="uname">Admin@anits</p>
                                    <p id="follow">Follow</p>
                                </div>
                                <div class="p2">
                                    <p id="caption">&nbsp;&nbsp; 🌟 Welcome, Students! 🚀 #NewBeginnings</p>
                                    
                                </div>
                                <div class="p3">
                                        <img src="images/post2.jpg" height="260px" width="460px">
                                </div>
                                <div class="p4">
                                    <img id="like" src="images/likeC.jpg" width="27px" height="27px">
                                    <p id="like1">0</p>
                                    <div id="comment-icon" onclick="showCommentBox()">
                                    <img id="cmnt" src="images/comment2.jpg"  width="30px" height="36px" >
                                    <p id="cmnt1">0</p>
                                    </div>
                                    <div class="popup-container" id="commentPopup">
                                        <div class="popup-content">
                                            <span class="close-btn" onclick="hideCommentBox()">&times;</span>
                                            <form id="commentForm" onsubmit="addComment(); return false;">
                                                <textarea id="commentText" placeholder="Add a comment"></textarea>
                                                <button type="submit">Add Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="r2">
                <h3 style="text-align: center;">Latest News</h3>
                <hr>
                <table style="margin: 0 auto;">
                    <tr >
                        <td id="new" id="n1" >
                            <img src="https://www.thespruce.com/thmb/NDbyD3OE7ICtG9aBiEz4Jr8Fhos=/2121x1414/filters:fill(auto,1)/cropped-hands-planting-sapling-in-dirt-998567842-5c436bcd4cedfd000103d01c.jpg" height="150px" width="310px">
                            <p align="center">NSS plantation</p>
                        </td>
                    <br>
                    <tr>
                        <td id="new" id="n1">
                            <img src="data:image/jpeg;base64,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" height="180" width="310">
                            <p align="center">cursors 2k23</p>
                        </td>
                   </tr>
                   <tr>
                    <td id="new" id="n1">
                        <img src="data:image/jpeg;base64,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" height="180px" width="310">
                         <p align="center">republic day celebrations</p>
                    </td>
                   </tr>
                   
                </table>
            </div>
        </div>
    </div>
    <script>
    //     document.getElementById('like').addEventListener('click',function(){
    //         var likeCount= parseInt(document.getElementById('like1').innerText);
    //         likeCount++;
    //         document.getElementById('like').src='images/like.jpg';
    //         document.getElementById('like1').innerText = likeCount;
    //     });
    //     document.getElementById('cmnt').addEventListener('click', function () {
    //     //,Get the current comment count
    //      var commentCount = parseInt(document.getElementById('cmnt1').innerText);

    //      // Update the comment count
    //      commentCount++;

    //     // // Update the UI with the new comment count
    //      document.getElementById('cmnt1').innerText = commentCount;

    //     // Update the database
    //     updateDatabase(parseInt(document.getElementById('like1').innerText),commentCount);
    // });
    document.getElementById('like').addEventListener('click', function () {
    var postId = 1; // Assuming a single post for demonstration
    var likes = JSON.parse(localStorage.getItem('likes'));
    var likeCount = likes[postId] || 0;

    if (likeCount === 0) {
        // If not liked, change to liked state
        likeCount++;
        document.getElementById('like').src = 'images/like.jpg';
        document.getElementById('like1').innerText = likeCount;
    } else {
        // If already liked, change to unliked state
        likeCount--;
        document.getElementById('like').src = 'images/unlike.jpg';
        document.getElementById('like1').innerText = likeCount;
    }

    // Update the database
    updateDatabase(likeCount, parseInt(document.getElementById('cmnt1').innerText));
});


    function showCommentBox() {
    document.getElementById("commentPopup").style.display = "block";
}

function hideCommentBox() {
    document.getElementById("commentPopup").style.display = "none";
}

function addComment() {
    var commentText = document.getElementById("commentText").value;
    if (commentText.trim() !== "") {
        // Add the new comment to the commentsData array
        commentsData.push(commentText);

        // Update the UI
        displayComments();
        updateCommentsCount();

        // Call the function to update the database
        updateDatabase(parseInt(document.getElementById('like1').innerText), commentsData.length);

        // Clear the input field
        document.getElementById("commentText").value = "";
    }
}


function updateCommentsCount() {
    const commentsCount = document.getElementById("cmnt1");
    const count = commentsData.length;
    commentsCount.textContent = count + (count === 1 ? " comment" : " comments");
}
    function updateDatabase(likeCount, commentCount) {
        var postId = 1; // Assuming a single post for demonstration

        // Make an AJAX request to update.php
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Update successful
            }
        };
        xhr.send("likeCount=" + likeCount + "&commentCount=" + commentCount);
    }

    // ... (Remaining existing code)

    
 const img=document.getElementById("like");
 let toggle=true;
 img.addEventListener('click', function()
 {
    var likeCount= parseInt(document.getElementById('like1').innerText);
    //         likeCount++;
    //         document.getElementById('like').src='images/like.jpg';
    //         document.getElementById('like1').innerText = likeCount;
    toggle=!toggle;
    if(toggle)
    {
        img.src='images/likeC.jpg';
        likeCount--;
        document.getElementById('like1').innerText = likeCount;
    }
    else 
    {
        img.src='images/like.jpg';
        likeCount++;
        document.getElementById('like1').innerText = likeCount;
    }
 })


    </script>

</body>
</html>