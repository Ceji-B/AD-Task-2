<?php


include_once '../components/header.component.php';

$features = [
    "High-quality stainless steel",
    "Keeps drinks cold for 24 hours",
    "Leak-proof lid",
    "Eco-friendly materials"
];

$specs = [
    "Capacity" => "500ml",
    "Weight" => "350g",
    "Dimensions" => "25cm x 7cm",
    "Color Options" => ["Red", "Blue", "Green", "Black"]
];

function renderFeatures($features) {
    $html = "<ul class='feature-list'>";
    foreach ($features as $feature) {
        $html .= "<li><i class='fas fa-check-circle'></i> " . htmlspecialchars($feature) . "</li>";
    }
    $html .= "</ul>";
    return $html;
}

function renderSpecs($specs) {
    $html = "<dl class='spec-list'>";
    foreach ($specs as $key => $value) {
        $html .= "<dt>" . htmlspecialchars($key) . "</dt>";
        if (is_array($value)) {
            $html .= "<dd>" . implode(", ", array_map('htmlspecialchars', $value)) . "</dd>";
        } else {
            $html .= "<dd>" . htmlspecialchars($value) . "</dd>";
        }
    }
    $html .= "</dl>";
    return $html;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Le tumbler</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-FILL-YOUR-KEY" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<main>

    <section class="about" id="about">
        <div class="about-container">
            <div class="about-img">
                <img src="../page/assets/img/5.jpg" alt="about banner" />
            </div>
            <div class="about-text">
                <span>About us</span>
                <p>Le Tumblr is more than just a drinkware brand — it’s a lifestyle movement built around style, sustainability, and self-expression. Born from the idea that hydration should never be boring, Le Tumblr offers premium-quality tumblers that blend sleek design with practical performance.</p>
                <p>Our tumblers are thoughtfully crafted to suit both everyday routines and adventurous escapes. Whether you're sipping your morning coffee, staying hydrated at the gym, or enjoying a cold drink on a sunny day, Le Tumblr ensures your beverage stays at the perfect temperature — all while turning heads.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>

</main>

<?php include_once '../components/footer.component.php'; ?>
<script src="../page/assets/js/script.js"></script>
<script>

document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = "translateY(0)";
            }
        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll('.about-container').forEach(el => {
        el.style.opacity = 0;
        el.style.transform = "translateY(60px)";
        el.style.transition = "all 0.8s ease-out";
        observer.observe(el);
    });
});
</script>
</body>
</html>
