<?php

class User {
    public function getProfile() {
        return new Profile();
    }
}

class Profile {
    public function getEmail() {
        return "frank@gmail.com";
    }
}

$user = new User();

// 💥 Fatal error happens here

$email = $user?->getProfile()?->getEmail() ?? "It's NULL"; // if user null returns "It's null" if not null returns getProfile(), if it's not null returns getEmail().

echo $email;
