const STEPS = [
    { label: "Initiation" },
    { label: "Négociation" },
    { label: "Due Diligence" },
    { label: "Finalisation" },
    { label: "Clôturé" },
];

const currentStep = 4;

document.querySelectorAll('.progress-bar').forEach(bar => {
    const valeur = bar.getAttribute('aria-valuenow');
    bar.style.width = valeur + '%';
});

function render(steps, active) {
    const stepper = document.getElementById("stepper");
    stepper.innerHTML = "";

    steps.forEach((s, i) => {
        const idx = i + 1;

        const state =
            idx < active ? "completed" : idx === active ? "active" : "inactive";

        const step = document.createElement("div");
        step.className = `step ${state}`;
        step.dataset.index = idx;
        step.innerHTML = `
            <div class="step-circle"><span>${idx}</span></div>
            <span class="step-label">${s.label}</span>`;

        step.addEventListener("click", () => render(steps, idx));

        stepper.appendChild(step);

        if (i < steps.length - 1) {
            const conn = document.createElement("div");
            conn.className = "step-connector";
            const fill = document.createElement("div");
            fill.className = "step-connector-fill";
            conn.appendChild(fill);
            stepper.appendChild(conn);

            requestAnimationFrame(() => {
                fill.style.width = idx < active ? "100%" : "0%";
            });
        }
    });

    const pct = Math.round(((active - 1) / (steps.length - 1)) * 100);
    requestAnimationFrame(() => {
        document.getElementById("progressFill").style.width = pct + "%";
        document.getElementById("pctLabel").textContent = pct + "%";
    });
}

render(STEPS, currentStep);
