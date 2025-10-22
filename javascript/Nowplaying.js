document.addEventListener("DOMContentLoaded", () => {
  const moreBtn = document.querySelector(".more");
  const grid = document.querySelector(".grid");

if (!moreBtn || !grid) return;


  // Extra movies (add as many as you want)
  const extraMovies = [
    {
      title: "Money Heist",
      poster: "../Image/movie7.jpg",
      genre: "Action",
      time: "2h 10m",
      rating: "8.5",
      stars: 4
    },
    {
      title: "Attack on Titan",
      poster: "../Image/movie12.jpg",
      genre: "Action",
      time: "2h 14m",
      rating: "7.8",
      stars: 4
    },
    {
      title: "Naruto",
      poster: "../Image/movie13.jpg",
      genre: "Adventure",
      time: "2h 30m",
      rating: "8.0",
      stars: 5
    },
    {
      title: "Avengers: Endgame",
      poster: "../Image/movie14.jpg",
      genre: "Sci-Fi",
      time: "3h 00m",
      rating: "9.0",
      stars: 5
    }
  ];

  // Function to generate stars dynamically
  function getStars(count) {
    return Array.from({ length: 5 }, (_, i) =>
      `<span class="star ${i < count ? "filled" : ""}">★</span>`
    ).join("");
  }

  // Track which movies are already shown
  let currentIndex = 0;
  const batchSize = 2; // 👈 how many to show per click

  moreBtn.addEventListener("click", () => {
    // Slice next movies
    const nextMovies = extraMovies.slice(currentIndex, currentIndex + batchSize);

    nextMovies.forEach(movie => {
      const card = document.createElement("a");
      card.href = "sub.html";
      card.innerHTML = `
        <article class="card">
          <div class="poster" style="background-image:url('${movie.poster}')"></div>
          <div class="body">
            <h3>${movie.title}</h3>
            <div class="sub">${movie.genre} • <span class="muted">${movie.time}</span></div>
            <div class="meta-row">
              <div class="rating">
                <div class="stars">${getStars(movie.stars)}</div>
              </div>
              <div style="font-weight:700;color:var(--accent)">${movie.rating}</div>
            </div>
          </div>
        </article>`;
      grid.appendChild(card);
    });

    // Move index forward
    currentIndex += batchSize;

    // Hide button if no more movies left
    if (currentIndex >= extraMovies.length) {
      moreBtn.style.display = "none";
    }
  });
});
