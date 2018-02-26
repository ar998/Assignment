@extends('layouts.default')

<div class="container mt-4">

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col"> #</th>
            <th scope="col">Message</th>
            <th scope="col">Delete</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><a href="/card">Message 1</a></td>
            <td>
                <button type="submit" class="btn btn-primary">Delete</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a href="/card">Message 2</a></td>
            <td>
                <button type="submit" class="btn btn-primary">Delete</button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><a href="/card">Message 3</a></td>
            <td>
                <button type="submit" class="btn btn-primary">Delete</button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><a href="/card">Message 4</a></td>
            <td>
                <button type="submit" class="btn btn-primary">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>