<footer class="footer">
<p>© Master Software Solution Hitech Private Limited</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();

function runCountUp() {
const counters = document.querySelectorAll('.highlight-section .count');
const duration = 1800;

const animate = (node) => {
const target = Number(node.dataset.target);
let current = 0;
const step = Math.max(1, Math.round(target / (duration / 16)));

const tick = () => {
current += step;
if (current >= target) {
node.textContent = target;
return;
}
node.textContent = current;
requestAnimationFrame(tick);
};

tick();
};

const observer = new IntersectionObserver((entries, obs) => {
entries.forEach(entry => {
if (!entry.isIntersecting) return;
const node = entry.target;
animate(node);
obs.unobserve(node);
});
}, { threshold: 0.5 });

counters.forEach(counter => observer.observe(counter));
}

if (document.readyState === 'loading') {
document.addEventListener('DOMContentLoaded', runCountUp);
} else {
runCountUp();
}
</script>

</body>
</html>