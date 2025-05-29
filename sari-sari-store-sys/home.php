<body>
    
    <header>
        <div class="store-banner">
            <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=800&q=80" 
                 alt="KJ Sari-Sari Store Front" />
        </div>
        
        <h1>Welcome to Sari-Sari Store 🏪</h1>
        <p class="welcome-msg">
            Your neighborhood's friendly spot for daily essentials and good vibes! 
            Open 7AM - 8PM daily.
        </p>
    </header>
    <main>
    <div class="main-content">
       
        <div class="left-column">
          
            <section aria-label="Quick Actions">
                <div class="cards-container">
                    <div class="card">
                        <i class="fas fa-box fa-3x" style="color:#d84315;"></i>
                        <a href="index.php?controller=product&action=index">📦 Manage Products</a>
                    </div>
                    <div class="card">
                        <i class="fas fa-shopping-cart fa-3x" style="color:#ff6f00;"></i>
                        <a href="http://localhost/sari-sari-store-sys/index.php?controller=sales&action=index">🛒 Sales Transactions</a>
                    </div>
                    <div class="card">
                        <i class="fas fa-chart-line fa-3x" style="color:#b7410e;"></i>
                        <a href="index.php?controller=report&action=index">📊 Sales Reports</a>
                    </div>
                </div>
            </section>
       
            <section class="promo-box" aria-label="Today's Promotion">
                <div class="promo">
                    <h4>🌟 Today's Deal: Piattos at ₱15 lang!</h4>
                </div>
                <div style="padding: 10px; background: #fff3cd; border-left: 5px solid #ffb703;">
                    <h4>☀️ Today’s Mood: Sunny and Sweet!</h4>
                    <p>Perfect for a cold Coke and sweet corn chips 🌽</p>
                </div>
            </section>

            <section class="notes-section">
                 <h3>🧮 Sukli Calculator</h3>
                <label>Bayad: <input type="number" id="bayad" /></label><br>
                <label>Presyo: <input type="number" id="presyo" /></label><br><br>
                <button onclick="computeSukli()">Calculate Sukli</button>
                <p id="resultSukli"></p>
            </section>

            <script>
                function computeSukli() {
                 const bayad = parseFloat(document.getElementById('bayad').value);
             const presyo = parseFloat(document.getElementById('presyo').value);
            const sukli = bayad - presyo;
                 document.getElementById('resultSukli').innerText = 
                sukli >= 0 ? Sukli: ₱${sukli.toFixed(2)} : "Kulangan ug bayad!";
            }
            </script>
        </div>
       
        <div class="right-column">
          
            <section class="store-goals" aria-label="Store Goals">
                <h3>🎯 Store Goals</h3>
                <ul>
                    <li>Sell ₱10,000 worth of products this month</li>
                    <li>Add 5 new items to inventory</li>
                    <li>Restock all snacks before Friday</li>
                </ul>
            </section>
            
            <section class="notes-section" aria-label="Reminders and Notes">
                <h3>📌 Reminders & Notes</h3>
                <ul>
                    <li>Order new softdrinks on Friday</li>
                    <li>Barangay fiesta next week - expect higher sales</li>
                    <li>Check expiry dates of canned goods</li>
                </ul>
            </section>
            <!-- Events -->
            <section class="notes-section" aria-label="Upcoming Events">
                <div style="background: #e7f3ff; padding: 15px; border-left: 4px solid #4da6ff; border-radius: 10px;">
                    <h3>📆 Upcoming Events</h3>
                    <ul>
                        <li>🎉 Fiesta sa Tejero - June 10</li>
                        <li>📲 Load Stock Check - Every Monday</li>
                        <li>🧼 General Cleaning - End of Month</li>
                    </ul>
                </div>
            </section>

        </div>
    </div>
  
    <div style="background-color: #ffe0b2; padding: 15px; border-radius: 10px; text-align: center;">
        <h2>🙏 Thank you for supporting your local sari-sari store!</h2>
        <p>Every piso counts. Padayon ta! 💪</p>
    </div>
</main>
    
    <footer>
        <blockquote>
            "Small business, big dreams. 💪 Keep pushing forward!"
        </blockquote>
         
        <section class="social-links" aria-label="Follow us on social media">
            <a href="https://facebook.com/YourPageName" target="_blank" title="Facebook" aria-label="Facebook">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://instagram.com/YourUsername" target="_blank" title="Instagram" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://youtube.com/@YourChannelName" target="_blank" title="YouTube" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
        </section>
    </footer>
</body>
</html>
