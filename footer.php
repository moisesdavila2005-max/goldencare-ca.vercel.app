<!-- Jason - Nice Home Care Chat Widget -->
<style>
  .jason-chat-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4A90E2, #50E3C2);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    font-weight: bold;
    border: none;
    transition: transform 0.3s ease;
  }
  .jason-chat-widget:hover {
    transform: scale(1.05);
  }
  .jason-chat-popup {
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 350px;
    max-height: 400px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    display: none;
    flex-direction: column;
    overflow: hidden;
    border: 1px solid #e0e0e0;
  }
  .jason-header {
    background: #4A90E2;
    color: white;
    padding: 12px;
    font-weight: bold;
    display: flex;
    align-items: center;
  }
  .jason-header img {
    width: 24px;
    margin-right: 10px;
    border-radius: 50%;
  }
  .jason-messages {
    padding: 15px;
    height: 260px;
    overflow-y: auto;
    font-size: 14px;
    line-height: 1.5;
  }
  .jason-input {
    display: flex;
    padding: 10px;
    border-top: 1px solid #eee;
  }
  .jason-input input {
    flex: 1;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 20px;
    margin-right: 8px;
  }
  .jason-input button {
    background: #50E3C2;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 8px 15px;
    cursor: pointer;
  }
</style>

<button class="jason-chat-widget" onclick="toggleJason()">
  💬
</button>

<div class="jason-chat-popup" id="jasonPopup">
  <div class="jason-header">
    <img src="https://www.nicehomecareservices.com/jason-avatar.png" alt="Jason">
    Jason — Care Concierge
  </div>
  <div class="jason-messages" id="jasonMessages">
    <p><em>Hi there! I’m Jason from Nice Home Care Services. Thank you for visiting us today. Whether you’re looking for care for a loved one, exploring options for yourself, or just have a question — I’m here to help. How can I help you today?</em></p>
  </div>
  <div class="jason-input">
    <input type="text" placeholder="Type your message…" id="jasonInput">
    <button onclick="sendJasonMessage()">Send</button>
  </div>
</div>

<script>
function toggleJason() {
  const popup = document.getElementById('jasonPopup');
  popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
}

function sendJasonMessage() {
  const input = document.getElementById('jasonInput');
  const messages = document.getElementById('jasonMessages');
  const msg = input.value.trim();

  if (!msg) return;

  // User message
  messages.innerHTML += `<p style="text-align: right; margin: 10px 0;"><strong>You:</strong> ${msg}</p>`;
  input.value = '';

  // Simulate Jason response (replace with real API later)
  setTimeout(() => {
    const responses = [
      "I'm here to help you find the right care for your loved one. Would you like to schedule a free assessment?",
      "Many families worry about costs — but we offer flexible payment options. Would you like a personalized quote?",
      "We match caregivers by personality — not just skills. Would you like to meet your potential caregiver before they start?",
      "You're not alone in this. I'm here to help, every step of the way."
    ];
    const randomResponse = responses[Math.floor(Math.random() * responses.length)];
    messages.innerHTML += `<p style="margin: 10px 0;"><strong>Jason:</strong> ${randomResponse}</p>`;
    messages.scrollTop = messages.scrollHeight;
  }, 800);
}
</script>
<!-- Jason Chat Widget for Squarespace -->
<style>
  .jason-chat-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4A90E2, #50E3C2);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    font-weight: bold;
    border: none;
    transition: transform 0.3s ease;
  }
  .jason-chat-widget:hover {
    transform: scale(1.05);
  }
  .jason-chat-popup {
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 350px;
    max-height: 400px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    display: none;
    flex-direction: column;
    overflow: hidden;
    border: 1px solid #e0e0e0;
  }
  .jason-header {
    background: #4A90E2;
    color: white;
    padding: 12px;
    font-weight: bold;
    display: flex;
    align-items: center;
  }
  .jason-header img {
    width: 24px;
    margin-right: 10px;
    border-radius: 50%;
  }
  .jason-messages {
    padding: 15px;
    height: 260px;
    overflow-y: auto;
    font-size: 14px;
    line-height: 1.5;
  }
  .jason-input {
    display: flex;
    padding: 10px;
    border-top: 1px solid #eee;
  }
  .jason-input input {
    flex: 1;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 20px;
    margin-right: 8px;
  }
  .jason-input button {
    background: #50E3C2;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 8px 15px;
    cursor: pointer;
  }
</style>

<button class="jason-chat-widget" onclick="toggleJason()">
  💬
</button>

<div class="jason-chat-popup" id="jasonPopup">
  <div class="jason-header">
    <img src="https://www.nicehomecareservices.com/jason-avatar.png" alt="Jason">
    Jason — Care Concierge
  </div>
  <div class="jason-messages" id="jasonMessages">
    <p><em>Hi there! I’m Jason from Nice Home Care Services. Thank you for visiting us today. Whether you’re looking for care for a loved one, exploring options for yourself, or just have a question — I’m here to help. How can I help you today?</em></p>
  </div>
  <div class="jason-input">
    <input type="text" placeholder="Type your message…" id="jasonInput">
    <button onclick="sendJasonMessage()">Send</button>
  </div>
</div>

<script>
function toggleJason() {
  const popup = document.getElementById('jasonPopup');
  popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
}

function sendJasonMessage() {
  const input = document.getElementById('jasonInput');
  const messages = document.getElementById('jasonMessages');
  const msg = input.value.trim();

  if (!msg) return;

  messages.innerHTML += `<p style="text-align: right; margin: 10px 0;"><strong>You:</strong> ${msg}</p>`;
  input.value = '';

  setTimeout(() => {
    const responses = [
      "I'm here to help you find the right care for your loved one. Would you like to schedule a free assessment?",
      "Many families worry about costs — but we offer flexible payment options. Would you like a personalized quote?",
      "We match caregivers by personality — not just skills. Would you like to meet your potential caregiver before they start?",
      "You're not alone in this. I'm here to help, every step of the way."
    ];
    const randomResponse = responses[Math.floor(Math.random() * responses.length)];
    messages.innerHTML += `<p style="margin: 10px 0;"><strong>Jason:</strong> ${randomResponse}</p>`;
    messages.scrollTop = messages.scrollHeight;
  }, 800);
}
</script>
