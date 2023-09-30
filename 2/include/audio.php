<section class="mt-1 text-light">
    <div class="container b-3">
        <div class="row">
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
            $sql = "SELECT artist, song, coverart, audio FROM music order by id desc";
            $result = $conn->query($sql);

            $recordCounter = 0; // Initialize a counter
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $artist = $row["artist"];
                    $song = $row["song"];
                    $coverartPath = $row["coverart"];
                    $audioSrc = $row["audio"];
                    ?>
                    <div class="col-sm-3 mb-3" id="clicksong<?php echo $recordCounter; ?>">
                        <div class="card rounded-pill"
                            onclick="playAudio('<?php echo $audioSrc; ?>', '<?php echo $coverartPath; ?>', <?php echo $recordCounter; ?>)">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-sm-4 text-end p-0">
                                        <img style="width: 80px;" src="<?php echo $coverartPath; ?>"
                                            alt="<?php echo $artist; ?>">
                                    </div>
                                    <div class="col-sm-8 p-0 text-center">
                                        <b>
                                            <?php echo $artist; ?>
                                        </b><br>
                                        <?php echo $song; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $recordCounter++;
                }
            } else {
                echo "No data found in the database.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</section>