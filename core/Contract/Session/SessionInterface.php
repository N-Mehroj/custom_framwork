<?php

namespace Core\Contract\Session;

interface SessionInterface extends
    SessionStorageInterface,
    SessionMutationInterface,
    SessionCheckInterface,
    SessionFlashInterface,
    SessionPullInterface
{}