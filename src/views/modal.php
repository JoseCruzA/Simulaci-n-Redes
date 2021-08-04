<div class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h1>Connection Info</h1>
            <button class="delete" aria-label="close" onclick="closeModal()"></button>
        </div>
        <div class="modal-body">
            <h3>
                Server Ip: 
                <a class="no-weight">
                    <?php  echo $_SERVER['SERVER_ADDR']; ?>
                </a>
            </h3>
            <h3>
                Client Ip: 
                <a class="no-weight">
                    <?php  echo $_SERVER['REMOTE_ADDR']; ?>
                </a>
            </h3>
            <h3>
                Protocol: 
                <a class="no-weight">
                    <?php  echo (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) ? 'IPv6' : 'IPv4') ?>
                </a>
            </h3>
        </div>
    </div>
</div>