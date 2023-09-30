<div class="mx-5 px-3 pb-5 sticky-bottom">
    <div class="music-player text-center" style="height: 130px; display: none;" id="music-player">
        <div class="row">
            <div class="col-md-9">
                <audio id="song" preload="auto">
                    <!-- The audio source will be set dynamically -->
                </audio>
            </div>
        </div>
        <div class="btn btn-light btn-rounded-circle" id="backwardBtn"><i class="fas fa-backward"></i></div>
        <div class="img-container" style="height: 110px;">
            <img style="height: 130px;" src="" alt="coverartpath" id="coverArt">
            <div class="text-overlay" id="playPauseBtn">
                <i id="playPauseIcon" class="fas fa-play"></i>
            </div>
        </div>
        <div class="btn btn-light btn-rounded-circle" id="forwardBtn"><i class="fas fa-forward"></i></div>
        <div>
            <div class="text-light" id="artistName"></div> <!-- Display artist here -->
            <div class="text-light" id="songName"></div> <!-- Display song here -->
        </div>
        <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" id="progress" style="width: 0%"></div>
        </div>
    </div>
</div>

<script>
    let progress = document.getElementById("progress");
    let song = document.getElementById("song");
    let playPauseIcon = document.getElementById("playPauseIcon");
    let playPauseBtn = document.getElementById("playPauseBtn");
    let coverArt = document.getElementById("coverArt");
    let forwardBtn = document.getElementById("forwardBtn");
    let backwardBtn = document.getElementById("backwardBtn");
    let artistName = document.getElementById("artistName"); // Added line
    let songName = document.getElementById("songName"); // Added line
    let musicPlayer = document.getElementById("music-player"); // Added line

    // Initialize an array to store song data
    let songs = [
        <?php
        // Database connection parameters (replace with your own)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wave_app";

        // Create a connection to the database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to retrieve data from the database
        $sql = "SELECT artist, song, coverart, audio FROM music";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $audioSrc = $row["audio"];
                $coverartPath = $row["coverart"];
                $artist = addslashes($row["artist"]); // Get the artist name
                $songTitle = addslashes($row["song"]); // Get the song title
                echo "[
                        '$audioSrc',
                        '$coverartPath',
                        '$artist',
                        '$songTitle'
                    ],";
            }
        }

        // Close the database connection
        $conn->close();
        ?>
    ];

    let currentSongIndex = 0;

    // Function to load and play the selected song
    function loadAndPlaySong(index) {
        let audioSrc = songs[index][0];
        song.src = audioSrc;

        // Update artist and song names
        artistName.textContent = songs[index][2]; // Update artist name
        songName.textContent = songs[index][3]; // Update song name

        let coverartPath = songs[index][1];
        coverArt.src = coverartPath; // Update cover art image

        song.play();
        playPauseIcon.classList.remove("fa-play");
        playPauseIcon.classList.add("fa-pause");
    }

    // Event listener for the play/pause button
    playPauseBtn.addEventListener("click", function () {
        if (song.paused) {
            song.play();
            playPauseIcon.classList.remove("fa-play");
            playPauseIcon.classList.add("fa-pause");
        } else {
            song.pause();
            playPauseIcon.classList.remove("fa-pause");
            playPauseIcon.classList.add("fa-play");
        }
    });

    // Event listener for the forward button
    forwardBtn.addEventListener("click", function () {
        if (currentSongIndex < songs.length - 1) {
            currentSongIndex++;
        } else {
            currentSongIndex = 0;
        }
        loadAndPlaySong(currentSongIndex);
    });

    // Event listener for the backward button
    backwardBtn.addEventListener("click", function () {
        if (currentSongIndex > 0) {
            currentSongIndex--;
        } else {
            currentSongIndex = songs.length - 1;
        }
        loadAndPlaySong(currentSongIndex);
    });

    // Event listener for audio progress
    song.addEventListener("timeupdate", function () {
        const progressPercentage = (song.currentTime / song.duration) * 100;
        progress.style.width = progressPercentage + "%";
    });

    // Function to play audio when a card is clicked
    function playAudio(audioSrc, coverartPath, artist, songTitle, index) {
        currentSongIndex = index; // Set the current song index
        song.src = audioSrc;
        coverArt.src = coverartPath; // Set cover art image

        // Update artist and song names
        artistName.textContent = artist;
        songName.textContent = songTitle;

        song.play();
        playPauseIcon.classList.remove("fa-play");
        playPauseIcon.classList.add("fa-pause");
        musicPlayer.style.display = "block"; // Show the music player
    }
</script>