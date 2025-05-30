<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sari-Sari Store  | Home</title>
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <style>
        
        .main-content {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    align-items: flex-start;
    margin-bottom: 40px;
}

.left-column, .right-column {
    flex: 1;
    min-width: 300px;
    max-width: 480px;
}
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff0f6, #ffe6e6);
            color: #5a3e36;
            margin: 0; 
            padding: 20px;
            line-height: 1.6;
        }
        
        h1, h2, h3 {
            color: #b7410e;
            text-align: center;
            margin-bottom: 10px;
        }
        
        /* ===== HEADER SECTION ===== */
        .store-banner {
            max-width: 600px;
            margin: 0 auto 20px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(183,65,14,0.3);
        }
        
        .store-banner img {
            width: 100%;
            display: block;
        }
        
        .welcome-msg {
            text-align: center;
            font-size: 1.1rem;
            margin-bottom: 30px;
            font-style: italic;
        }
        
     
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 18px;
            margin-bottom: 30px;
        }
        
        .card {
            background: #fff3f2;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(183,65,14,0.15);
            padding: 20px;
            width: 250px;
            text-align: center;
            transition: transform 0.2s;
        }
        
        .card:hover {
            transform: scale(1.05);
        }
        
        .card a {
            text-decoration: none;
            color: #b7410e;
            font-weight: 600;
            display: block;
            margin-top: 10px;
        }
        
      
        .promo-box {
            background-color: #fff8e1;
            border-left: 6px solid #ff6f00;
            padding: 15px 20px;
            max-width: 600px;
            margin: 0 auto 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(255,111,0,0.2);
        }
        
        .promo-box h4 {
            margin-top: 0;
            color: #d84315;
        }
        .promo {
        animation: flip 10s infinite;
    }
        @keyframes flip {
      0% { transform: rotateY(0); }
     50% { transform: rotateY(180deg); }
    100% { transform: rotateY(0); }
    }
        
        .store-goals {
            max-width: 600px;
            margin: 0 auto 40px;
            background: #fff3f2;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(183,65,14,0.15);
        }
        
        .store-goals ul {
            list-style: none;
            padding-left: 0;
        }
        
        .store-goals li {
            padding: 8px 0;
            font-weight: 600;
        }
        
        .store-goals li::before {
            content: "✔ ";
            color: #ff6f00;
        }
        
       
        .notes-section {
            max-width: 600px;
            margin: 0 auto 40px;
            background: #fff3f2;
            border-radius: 12px;
            padding: 15px 20px;
            box-shadow: 0 3px 10px rgba(183,65,14,0.15);
        }
        
        .notes-section ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        
        blockquote {
            max-width: 600px;
            margin: 40px auto;
            font-style: italic;
            color: #6d4c41;
            border-left: 5px solid #ffab40;
            padding-left: 15px;
        }
        
       
        .social-links {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .social-links a {
            color: inherit;
            margin: 0 15px;
            font-size: 2rem;
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: #ff6f00;
        }
        
       
        @media (max-width: 768px) {
            .cards-container {
                flex-direction: column;
                align-items: center;
            }
            
            .card {
                width: 80%;
            }
        }

        .faq-section {
            max-width: 700px;
            margin: 40px auto;
            background: #fff9f4;
            padding: 20px 25px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(183,65,14,0.15);
        }

        .faq-section h2 {
            text-align: center;
            color: #b7410e;
            margin-bottom: 20px;
        }

        .faq-container details {
            background: #fff;
            margin-bottom: 15px;
            border-radius: 8px;
            padding: 12px 15px;
            cursor: pointer;
            border-left: 4px solid #ff8a65;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .faq-container summary {
            font-weight: 600;
            font-size: 1rem;
            color: #5a3e36;
            outline: none;
        }

        .faq-container p {
            margin-top: 8px;
            padding-left: 5px;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 1rem;
            width: 250px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 2px solid #ffb347;
        }

        button {
            background-color: #ff7f50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff5722;
        }

        #result {
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #b7410e;
        }

        .wheel {
            margin: 20px auto;
            padding: 15px;
            font-size: 1.2rem;
            width: 220px;
            border-radius: 10px;
            background: #fff3e0;
            border: 3px dashed #ffa726;
        }
        
    </style>
</head>


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
                sukli >= 0 ? `Sukli: ₱${sukli.toFixed(2)}` : "Kulangan ug bayad!";
            }
            </script>

            <section class="notes-section">
                <h2>🎲 Spin to Win a Discount!</h2>
                <p>Enter your name below then click "SPIN" to reveal your reward.</p>
                <input type="text" id="username" placeholder="Enter your name"/>
                <br>
                <button onclick="spinWheel()">🎉 SPIN 🎉</button>
                <div class="wheel" id="result">Your prize will appear here!</div>
             </section>

            <script>
                const prizes = [
                "₱5 off on Softdrinks 🥤",
                "No reward this time 😅 Try again!",
                "😅 Try again!",
                "₱10 off on Snacks 🍪",
                "No reward this time 😅 Try again!",
                "₱10 off on Load 📲",
                "No reward this time 😅 Try again!",
                "₱3 off on Biscuits ",
                "No reward this time 😅 Try again!",
                "₱5 off on Piattos! ",
                "No reward this time 😅 Try again!",
                "₱7 off on Corn Chips 🌽",
                "No reward this time 😅 Try again!"
                ];

            function spinWheel() {
                const name = document.getElementById('username').value.trim();
                const result = document.getElementById('result');

                if (!name) {
                     result.textContent = "Please enter your name first!";
                     return;
                }

                const randomIndex = Math.floor(Math.random() * prizes.length);
                const reward = prizes[randomIndex];

                result.textContent = `${name}, you won: ${reward}`;
                result.style.backgroundColor = "#fff3e0";}
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

            <section class="faq-section" aria-label="Frequently Asked Questions">
  <h2>❓ Frequently Asked Questions</h2>
  <div class="faq-container">
    
    <details>
      <summary>🕘 What are your store hours?</summary>
      <p>We are open from 7:00 AM to 8:00 PM daily, including weekends.</p>
    </details>

    <details>
      <summary>📍 Where is your store located?</summary>
      <p>We are located at CTU MAIN-CAMPUS.</p>
    </details>

    <details>
      <summary>📱 Do you sell load?</summary>
      <p>Yes, we offer Smart, Globe, and TNT load. Just ask us via messenger or visit the store.</p>
    </details>

    <details>
      <summary>📦 Can I reserve products?</summary>
      <p>Yes, you can message us to reserve high-demand products like eggs, rice, and softdrinks.</p>
    </details>

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
