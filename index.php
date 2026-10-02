
<?php
// ======================================
// APPLE MUSIC ASSISTANT
// Genre + Mood + Language
// ======================================

// Song database
$songs = [

    // POP
    "Pop" => [
        "Happy" => [
            "English" => [
                ["title" => "Can't Stop the Feeling!", "artist" => "Justin Timberlake"],
                ["title" => "Shake It Off", "artist" => "Taylor Swift"]
            ],
            "Malay" => [
                ["title" => "Satu Bulan", "artist" => "Budi Doremi"],
                ["title" => "Hati-Hati", "artist" => "Raisa"]
            ],
            "Tamil" => [
                ["title" => "Arabic Kuthu", "artist" => "Anirudh Ravichander"],
                ["title" => "Vaathi Coming", "artist" => "Anirudh Ravichander"]
            ],
            "Korean" => [
                ["title" => "Dynamite", "artist" => "BTS"],
                ["title" => "Dance The Night Away", "artist" => "TWICE"]
            ],
            "Japanese" => [
                ["title" => "Pretender", "artist" => "Official HIGE DANdism"],
                ["title" => "Lemon", "artist" => "Kenshi Yonezu"]
            ]
        ],

        "Sad" => [
            "English" => [
                ["title" => "Someone Like You", "artist" => "Adele"]
            ],
            "Malay" => [
                ["title" => "Hanya Rindu", "artist" => "Andmesh Kamaleng"]
            ],
            "Tamil" => [
                ["title" => "Kanave Kanave", "artist" => "Anirudh Ravichander"]
            ],
            "Korean" => [
                ["title" => "Spring Day", "artist" => "BTS"]
            ],
            "Japanese" => [
                ["title" => "First Love", "artist" => "Hikaru Utada"]
            ]
        ],

        "Relaxed" => [
            "English" => [
                ["title" => "Perfect", "artist" => "Ed Sheeran"]
            ],
            "Malay" => [
                ["title" => "Pulang", "artist" => "Insomniacks"]
            ],
            "Tamil" => [
                ["title" => "Munbe Vaa", "artist" => "Shreya Ghoshal & Naresh Iyer"]
            ],
            "Korean" => [
                ["title" => "Love Scenario", "artist" => "iKON"]
            ],
            "Japanese" => [
                ["title" => "Marigold", "artist" => "Aimyon"]
            ]
        ],

        "Energetic" => [
            "English" => [
                ["title" => "Blinding Lights", "artist" => "The Weeknd"]
            ],
            "Malay" => [
                ["title" => "Paling Sempurna", "artist" => "MALIQ & D'Essentials"]
            ],
            "Tamil" => [
                ["title" => "Naa Ready", "artist" => "Thalapathy Vijay"]
            ],
            "Korean" => [
                ["title" => "How You Like That", "artist" => "BLACKPINK"]
            ],
            "Japanese" => [
                ["title" => "Idol", "artist" => "YOASOBI"]
            ]
        ]
    ],

    // ROCK
    "Rock" => [
        "Happy" => [
            "English" => [
                ["title" => "Best Day of My Life", "artist" => "American Authors"]
            ],
            "Malay" => [
                ["title" => "Isabella", "artist" => "Search"]
            ],
            "Tamil" => [
                ["title" => "Surviva", "artist" => "Anirudh Ravichander"]
            ],
            "Korean" => [
                ["title" => "Dalla Dalla", "artist" => "ITZY"]
            ],
            "Japanese" => [
                ["title" => "Silhouette", "artist" => "KANA-BOON"]
            ]
        ],

        "Sad" => [
            "English" => [
                ["title" => "The Scientist", "artist" => "Coldplay"]
            ],
            "Malay" => [
                ["title" => "Gerimis Mengundang", "artist" => "Slam"]
            ],
            "Tamil" => [
                ["title" => "New York Nagaram", "artist" => "A. R. Rahman"]
            ],
            "Korean" => [
                ["title" => "Zombie", "artist" => "DAY6"]
            ],
            "Japanese" => [
                ["title" => "Wherever You Are", "artist" => "ONE OK ROCK"]
            ]
        ],

        "Relaxed" => [
            "English" => [
                ["title" => "Wish You Were Here", "artist" => "Pink Floyd"]
            ],
            "Malay" => [
                ["title" => "Bila Cinta Didusta", "artist" => "Screen"]
            ],
            "Tamil" => [
                ["title" => "Anbil Avan", "artist" => "A. R. Rahman"]
            ],
            "Korean" => [
                ["title" => "Through the Night", "artist" => "IU"]
            ],
            "Japanese" => [
                ["title" => "One More Time, One More Chance", "artist" => "Masayoshi Yamazaki"]
            ]
        ],

        "Energetic" => [
            "English" => [
                ["title" => "Believer", "artist" => "Imagine Dragons"]
            ],
            "Malay" => [
                ["title" => "Fantasia Bulan Madu", "artist" => "Search"]
            ],
            "Tamil" => [
                ["title" => "Aaluma Doluma", "artist" => "Anirudh Ravichander"]
            ],
            "Korean" => [
                ["title" => "God's Menu", "artist" => "Stray Kids"]
            ],
            "Japanese" => [
                ["title" => "The Beginning", "artist" => "ONE OK ROCK"]
            ]
        ]
    ],

    // R&B
    "R&B" => [
        "Happy" => [
            "English" => [
                ["title" => "Best Part", "artist" => "Daniel Caesar ft. H.E.R."]
            ],
            "Malay" => [
                ["title" => "Cinta Luar Biasa", "artist" => "Andmesh Kamaleng"]
            ],
            "Tamil" => [
                ["title" => "Megham Karukatha", "artist" => "Dhanush"]
            ],
            "Korean" => [
                ["title" => "Love Me Like This", "artist" => "NMIXX"]
            ],
            "Japanese" => [
                ["title" => "Stay With Me", "artist" => "Miki Matsubara"]
            ]
        ],

        "Sad" => [
            "English" => [
                ["title" => "All I Want", "artist" => "Kodaline"]
            ],
            "Malay" => [
                ["title" => "Tak Segampang Itu", "artist" => "Anggi Marito"]
            ],
            "Tamil" => [
                ["title" => "Thalli Pogathey", "artist" => "A. R. Rahman"]
            ],
            "Korean" => [
                ["title" => "Eight", "artist" => "IU ft. SUGA"]
            ],
            "Japanese" => [
                ["title" => "Dry Flower", "artist" => "Yuuri"]
            ]
        ],

        "Relaxed" => [
            "English" => [
                ["title" => "Get You", "artist" => "Daniel Caesar ft. Kali Uchis"]
            ],
            "Malay" => [
                ["title" => "Purnama", "artist" => "Noh Salleh"]
            ],
            "Tamil" => [
                ["title" => "Vaseegara", "artist" => "Bombay Jayashri"]
            ],
            "Korean" => [
                ["title" => "Love Poem", "artist" => "IU"]
            ],
            "Japanese" => [
                ["title" => "Nandemonaiya", "artist" => "RADWIMPS"]
            ]
        ],

        "Energetic" => [
            "English" => [
                ["title" => "Uptown Funk", "artist" => "Mark Ronson ft. Bruno Mars"]
            ],
            "Malay" => [
                ["title" => "Angkat", "artist" => "KRU"]
            ],
            "Tamil" => [
                ["title" => "Why This Kolaveri Di", "artist" => "Dhanush"]
            ],
            "Korean" => [
                ["title" => "Fantastic Baby", "artist" => "BIGBANG"]
            ],
            "Japanese" => [
                ["title" => "Kaikai Kitan", "artist" => "Eve"]
            ]
        ]
    ],

    // HIP-HOP
    "Hip-Hop" => [
        "Happy" => [
            "English" => [
                ["title" => "Good Life", "artist" => "Kanye West ft. T-Pain"]
            ],
            "Malay" => [
                ["title" => "Malam Ini", "artist" => "Joe Flizzow"]
            ],
            "Tamil" => [
                ["title" => "Vaathi Raid", "artist" => "Anirudh Ravichander"]
            ],
            "Korean" => [
                ["title" => "That That", "artist" => "PSY ft. SUGA"]
            ],
            "Japanese" => [
                ["title" => "Mephisto", "artist" => "Queen Bee"]
            ]
        ],

        "Sad" => [
            "English" => [
                ["title" => "Mockingbird", "artist" => "Eminem"]
            ],
            "Malay" => [
                ["title" => "Aku Maafkan Kamu", "artist" => "Malique ft. Jamal Abdillah"]
            ],
            "Tamil" => [
                ["title" => "Enjoy Enjaami", "artist" => "Dhee ft. Arivu"]
            ],
            "Korean" => [
                ["title" => "Holo", "artist" => "Lee Hi"]
            ],
            "Japanese" => [
                ["title" => "Luv(sic) Part 3", "artist" => "Nujabes"]
            ]
        ],

        "Relaxed" => [
            "English" => [
                ["title" => "Sunflower", "artist" => "Post Malone & Swae Lee"]
            ],
            "Malay" => [
                ["title" => "Kembali", "artist" => "Altimet"]
            ],
            "Tamil" => [
                ["title" => "Enjoy Enjaami", "artist" => "Dhee ft. Arivu"]
            ],
            "Korean" => [
                ["title" => "Seoul", "artist" => "RM"]
            ],
            "Japanese" => [
                ["title" => "Luv(sic) Part 2", "artist" => "Nujabes"]
            ]
        ],

        "Energetic" => [
            "English" => [
                ["title" => "Lose Yourself", "artist" => "Eminem"]
            ],
            "Malay" => [
                ["title" => "Apa Khabar", "artist" => "Joe Flizzow ft. SonaOne"]
            ],
            "Tamil" => [
                ["title" => "Vaathi Coming", "artist" => "Anirudh Ravichander"]
            ],
            "Korean" => [
                ["title" => "Daechwita", "artist" => "Agust D"]
            ],
            "Japanese" => [
                ["title" => "Battlecry", "artist" => "Nujabes"]
            ]
        ]
    ],

    // JAZZ
    "Jazz" => [
        "Happy" => [
            "English" => [
                ["title" => "What a Wonderful World", "artist" => "Louis Armstrong"]
            ],
            "Malay" => [
                ["title" => "Getaran Jiwa", "artist" => "P. Ramlee"]
            ],
            "Tamil" => [
                ["title" => "Anjali Anjali", "artist" => "A. R. Rahman"]
            ],
            "Korean" => [
                ["title" => "Perhaps Love", "artist" => "Eric Nam & CHEEZE"]
            ],
            "Japanese" => [
                ["title" => "Fly Me to the Moon", "artist" => "Claire"]
            ]
        ],

        "Sad" => [
            "English" => [
                ["title" => "Blue in Green", "artist" => "Miles Davis"]
            ],
            "Malay" => [
                ["title" => "Sepi", "artist" => "Aizat Amdan"]
            ],
            "Tamil" => [
                ["title" => "Po Nee Po", "artist" => "Anirudh Ravichander"]
            ],
            "Korean" => [
                ["title" => "Only", "artist" => "Lee Hi"]
            ],
            "Japanese" => [
                ["title" => "One More Time, One More Chance", "artist" => "Masayoshi Yamazaki"]
            ]
        ],

        "Relaxed" => [
            "English" => [
                ["title" => "The Girl from Ipanema", "artist" => "Stan Getz & João Gilberto"]
            ],
            "Malay" => [
                ["title" => "Belaian Jiwa", "artist" => "Innuendo"]
            ],
            "Tamil" => [
                ["title" => "New York Nagaram", "artist" => "A. R. Rahman"]
            ],
            "Korean" => [
                ["title" => "Every Moment of You", "artist" => "Sung Si-kyung"]
            ],
            "Japanese" => [
                ["title" => "First Love", "artist" => "Hikaru Utada"]
            ]
        ],

        "Energetic" => [
            "English" => [
                ["title" => "Sing, Sing, Sing", "artist" => "Benny Goodman"]
            ],
            "Malay" => [
                ["title" => "Gemuruh", "artist" => "Faizal Tahir"]
            ],
            "Tamil" => [
                ["title" => "Aalaporan Thamizhan", "artist" => "A. R. Rahman"]
            ],
            "Korean" => [
                ["title" => "Dynamite", "artist" => "BTS"]
            ],
            "Japanese" => [
                ["title" => "Gurenge", "artist" => "LiSA"]
            ]
        ]
    ]
];

// ======================================
// INITIALIZE VARIABLES
// ======================================

$genre = "";
$mood = "";
$language = "";
$recommendation = null;
$error = "";

// ======================================
// PROCESS FORM
// ======================================

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $genre = $_POST["genre"] ?? "";
    $mood = $_POST["mood"] ?? "";
    $language = $_POST["language"] ?? "";

    // Validate inputs
    if ($genre === "" || $mood === "" || $language === "") {
        $error = "Please select a genre, mood, and language.";
    } else {

        // Select genre using SWITCH
        switch ($genre) {
            case "Pop":
                $genreSongs = $songs["Pop"];
                break;

            case "Rock":
                $genreSongs = $songs["Rock"];
                break;

            case "R&B":
                $genreSongs = $songs["R&B"];
                break;

            case "Hip-Hop":
                $genreSongs = $songs["Hip-Hop"];
                break;

            case "Jazz":
                $genreSongs = $songs["Jazz"];
                break;

            default:
                $genreSongs = [];
                break;
        }

        // Select mood using SWITCH
        switch ($mood) {
            case "Happy":
                $moodSongs = $genreSongs["Happy"] ?? [];
                break;

            case "Sad":
                $moodSongs = $genreSongs["Sad"] ?? [];
                break;

            case "Relaxed":
                $moodSongs = $genreSongs["Relaxed"] ?? [];
                break;

            case "Energetic":
                $moodSongs = $genreSongs["Energetic"] ?? [];
                break;

            default:
                $moodSongs = [];
                break;
        }

        // Select language using SWITCH
        switch ($language) {
            case "English":
                $languageSongs = $moodSongs["English"] ?? [];
                break;

            case "Malay":
                $languageSongs = $moodSongs["Malay"] ?? [];
                break;

            case "Tamil":
                $languageSongs = $moodSongs["Tamil"] ?? [];
                break;

            case "Korean":
                $languageSongs = $moodSongs["Korean"] ?? [];
                break;

            case "Japanese":
                $languageSongs = $moodSongs["Japanese"] ?? [];
                break;

            default:
                $languageSongs = [];
                break;
        }

        // Randomly select a song
        if (!empty($languageSongs)) {
            $randomIndex = array_rand($languageSongs);
            $recommendation = $languageSongs[$randomIndex];
        } else {
            $error = "Sorry, no songs were found for your selection.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apple Music Assistant</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">

            <!-- HEADER -->
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold">
                    🎵 Apple Music Assistant
                </h1>

                <p class="lead text-secondary">
                    Discover songs based on your genre, mood, and language.
                </p>
            </div>

            <!-- FORM CARD -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <h3 class="mb-4 text-center">
    Find Your Song
</h3>

<p class="text-light mb-4 text-center">
    Choose your preferred genre, mood and language to get an Apple Music recommendation.
</p>

<form method="POST" action="">

                        <!-- GENRE -->
                        <div class="mb-4">
                            <label for="genre" class="form-label fw-semibold">
                                Select Genre
                            </label>

                            <select
                                class="form-select"
                                id="genre"
                                name="genre"
                                required
                            >
                                <option value="">Choose a genre</option>

                                <?php
                                $genres = ["Pop", "Rock", "R&B", "Hip-Hop", "Jazz"];

                                foreach ($genres as $g) {
                                    $selected = ($genre === $g) ? "selected" : "";
                                    echo "<option value='" . htmlspecialchars($g) . "' $selected>"
                                        . htmlspecialchars($g) .
                                        "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- MOOD -->
                        <div class="mb-4">
                            <label for="mood" class="form-label fw-semibold">
                                Select Mood
                            </label>

                            <select
                                class="form-select"
                                id="mood"
                                name="mood"
                                required
                            >
                                <option value="">Choose your mood</option>

                                <?php
                                $moods = ["Happy", "Sad", "Relaxed", "Energetic"];

                                foreach ($moods as $m) {
                                    $selected = ($mood === $m) ? "selected" : "";
                                    echo "<option value='" . htmlspecialchars($m) . "' $selected>"
                                        . htmlspecialchars($m) .
                                        "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- LANGUAGE -->
                        <div class="mb-4">
                            <label for="language" class="form-label fw-semibold">
                                Select Language
                            </label>

                            <select
                                class="form-select"
                                id="language"
                                name="language"
                                required
                            >
                                <option value="">Choose a language</option>

                                <?php
                                $languages = [
                                    "English",
                                    "Malay",
                                    "Tamil",
                                    "Korean",
                                    "Japanese"
                                ];

                                foreach ($languages as $lang) {
                                    $selected = ($language === $lang) ? "selected" : "";
                                    echo "<option value='" . htmlspecialchars($lang) . "' $selected>"
                                        . htmlspecialchars($lang) .
                                        "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- SUBMIT BUTTON -->
                        <div class="d-grid">
                            <button
                                type="submit"
                                class="btn btn-primary btn-lg rounded-3"
                            >
                                🎧 Get My Recommendation
                            </button>
                        </div>

                    </form>

                    <!-- ERROR MESSAGE -->
                    <?php if ($error !== ""): ?>
                        <div class="alert alert-warning mt-4">
                            <?= htmlspecialchars($error) ?>
                        </div>
                    <?php endif; ?>

                    <!-- RECOMMENDATION -->
                    <?php if ($recommendation !== null): ?>

                        <div class="recommendation-card mt-5 p-4 rounded-4">

                            <div class="text-center mb-3">
                                <span class="badge bg-success">
                                    Your Song Recommendation
                                </span>
                            </div>

                            <div class="text-center">
                                <div class="display-3 mb-3">🎵</div>

                                <h2 class="fw-bold">
                                    <?= htmlspecialchars($recommendation["title"]) ?>
                                </h2>

                                <p class="fs-5 text-secondary">
                                    <?= htmlspecialchars($recommendation["artist"]) ?>
                                </p>
                            </div>

                            <hr>

                            <div class="row text-center g-3">

                                <div class="col-4">
                                    <small class="text-secondary">Genre</small>
                                    <p class="fw-semibold mb-0">
                                        <?= htmlspecialchars($genre) ?>
                                    </p>
                                </div>

                                <div class="col-4">
                                    <small class="text-secondary">Mood</small>
                                    <p class="fw-semibold mb-0">
                                        <?= htmlspecialchars($mood) ?>
                                    </p>
                                </div>

                                <div class="col-4">
                                    <small class="text-secondary">Language</small>
                                    <p class="fw-semibold mb-0">
                                        <?= htmlspecialchars($language) ?>
                                    </p>
                                </div>

                            </div>

                            <div class="text-center mt-4">
                                <p class="text-secondary mb-0">
                                    Enjoy your music! 🎶
                                </p>
                            </div>

                        </div>

                    <?php endif; ?>

                </div>
            </div>

            <!-- FOOTER -->
            <div class="text-center mt-4 text-secondary">
                <small>
                    Apple Music Assistant | Discover music your way
                </small>
            </div>

        </div>
    </div>

</div>

<!-- Custom JavaScript -->
<script src="script.js"></script>

</body>
</html>