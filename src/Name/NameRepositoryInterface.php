<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Name;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
interface NameRepositoryInterface
{
    public function findByFirstName(): ?Name;

    public function findByLastName(): ?Name;
}
