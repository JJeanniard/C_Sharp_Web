﻿// <auto-generated />
using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Migrations;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using Tp_Freelance.Data;

namespace Tp_Freelance.Migrations
{
    [DbContext(typeof(FreelanceContext))]
    [Migration("20210106071215_initialUpdate")]
    partial class initialUpdate
    {
        protected override void BuildTargetModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .UseIdentityColumns()
                .HasAnnotation("Relational:MaxIdentifierLength", 128)
                .HasAnnotation("ProductVersion", "5.0.1");

            modelBuilder.Entity("Tp_Freelance.Models.Customer", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .UseIdentityColumn();

                    b.Property<int>("CatId")
                        .HasColumnType("int");

                    b.Property<string>("CustomerEmail")
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("CustomerName")
                        .HasColumnType("nvarchar(max)");

                    b.HasKey("Id");

                    b.ToTable("Customer");
                });

            modelBuilder.Entity("Tp_Freelance.Models.CustomerCat", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .UseIdentityColumn();

                    b.Property<string>("CatDescription")
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("CatName")
                        .HasColumnType("nvarchar(max)");

                    b.HasKey("Id");

                    b.ToTable("CustomerCat");
                });

            modelBuilder.Entity("Tp_Freelance.Models.Job", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .UseIdentityColumn();

                    b.Property<int>("CustomerId")
                        .HasColumnType("int");

                    b.Property<string>("JobDescription")
                        .HasColumnType("nvarchar(max)");

                    b.Property<DateTime>("JobEnd")
                        .HasColumnType("datetime2");

                    b.Property<DateTime>("JobStart")
                        .HasColumnType("datetime2");

                    b.Property<string>("JobStat")
                        .IsRequired()
                        .HasColumnType("nvarchar(1)");

                    b.Property<string>("JobTitle")
                        .HasColumnType("nvarchar(max)");

                    b.HasKey("Id");

                    b.ToTable("Job");
                });

            modelBuilder.Entity("Tp_Freelance.Models.Quote", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .UseIdentityColumn();

                    b.Property<int>("JobId")
                        .HasColumnType("int");

                    b.Property<DateTime>("QuoteDate")
                        .HasColumnType("datetime2");

                    b.Property<int>("QuoteFinalAmount")
                        .HasColumnType("int");

                    b.Property<DateTime>("QuoteFinalDate")
                        .HasColumnType("datetime2");

                    b.Property<string>("QuoteStat")
                        .IsRequired()
                        .HasColumnType("nvarchar(1)");

                    b.Property<int>("amount")
                        .HasColumnType("int");

                    b.HasKey("Id");

                    b.ToTable("Quote");
                });
#pragma warning restore 612, 618
        }
    }
}
