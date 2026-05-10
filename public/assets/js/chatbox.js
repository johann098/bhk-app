const input    = document.getElementById('chatInput');
const sendBtn  = document.getElementById('sendBtn');
const messages = document.getElementById('chatMessages');

function now() {
    return new Date().toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });
}

function sendMessage() {
    const text = input.value.trim();
    if (!text) return;

    const ts = document.createElement('span');
    ts.className = 'chat-time';
    ts.textContent = now();
    messages.appendChild(ts);

    const senderRow = document.createElement('div');
    senderRow.className = 'chat-sender-row right';
    senderRow.innerHTML = `
        <div class="chat-avatar self">BA</div>
        <span class="chat-sender-name">Bakulu Holdings</span>`;
    messages.appendChild(senderRow);

    const bubbleRow = document.createElement('div');
    bubbleRow.className = 'chat-bubble-row right';
    bubbleRow.innerHTML = `<div class="chat-bubble self">${text}</div>`;
    messages.appendChild(bubbleRow);

    const timeEl = document.createElement('span');
    timeEl.className = 'chat-bubble-time right';
    timeEl.textContent = now();
    messages.appendChild(timeEl);

    input.value = '';
    messages.scrollTop = messages.scrollHeight;
}

sendBtn.addEventListener('click', sendMessage);
input.addEventListener('keydown', e => {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendMessage();
    }
});
