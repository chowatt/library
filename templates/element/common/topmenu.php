<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Employee Documents</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <?= $this->Html->link('Books', ['controller' => 'books', 'action' => 'index'], ['class' => 'nav-link']);?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Authors', ['controller' => 'authors', 'action' => 'index'], ['class' => 'nav-link']);?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Notes', ['controller' => 'notes', 'action' => 'index'], ['class' => 'nav-link']);?>
            </li>
        </ul>
    </div>
</nav>